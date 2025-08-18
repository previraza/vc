<?php

// Manual include of the Agent class. Adjust the path to where you've placed Agent.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use Jenssegers\Agent\Agent;

/**
 * ActivityLogger.php
 * Complete class to handle user activity logging, fetching for DataTables,
 * and automatic creation of the activities table, now with browser and geolocation details.
 */
class ActivityLogger {
    /** @var PDO */
    protected $pdo;
    /** @var Agent */
    protected $agent;

    /**
     * Constructor: sets PDO, Agent and ensures activities table exists.
     */
    public function __construct(PDO $pdo) {
        $this->pdo   = $pdo;
        $this->agent = new Agent();
        $this->createTableIfNotExists();
    }

    /**
     * Create the activities table if it does not exist.
     */
    protected function createTableIfNotExists(): void {
        $sql = "CREATE TABLE IF NOT EXISTS `activities` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `user_id` INT NULL,
            `ip` VARCHAR(45) NOT NULL,
            `country` VARCHAR(100),
            `region` VARCHAR(100),
            `city` VARCHAR(100),
            `latitude` DECIMAL(10,8),
            `longitude` DECIMAL(11,8),
            `device` VARCHAR(50),
            `browser` VARCHAR(100),
            `browser_version` VARCHAR(50),
            `user_agent` VARCHAR(255),
            `action` VARCHAR(100),
            `page` VARCHAR(200),
            `method` VARCHAR(10),
            `data` JSON,
            `get_params` JSON,
            `post_params` JSON,
            `review` INT NOT NULL DEFAULT 1,
            `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        $this->pdo->exec($sql);
    }

    /**
     * Log an activity: increment `review` if same payload, else insert new.
     * @param string $action
     * @param array  $data   Optional ['get'=>[], 'post'=>[]]
     */
    public function log(string $action, array $data = []): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $userId         = $_SESSION['USER']['id'] ?? null;
        $ip             = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
        $ua             = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $device         = $this->detectDevice($ua);
        $browser        = $this->getBrowser();
        $browserVersion = $this->getBrowserVersion();
        $geo            = $this->getGeolocation($ip);
        $page           = $_SERVER['REQUEST_URI'] ?? '';
        $method         = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $getParams  = json_encode(array_merge($_GET,  $data['get']  ?? []));
        $postParams = json_encode(array_merge($_POST, $data['post'] ?? []));

        // 1) Check last matching record
        $sql = "SELECT `id`,`get_params`,`post_params`
            FROM `activities`
            WHERE `user_id`=? AND `ip`=? AND `country`=? AND `region`=? AND `city`=?
              AND (`latitude` = ? OR (`latitude` IS NULL AND ? IS NULL))
              AND (`longitude` = ? OR (`longitude` IS NULL AND ? IS NULL))
              AND `device`=? AND `browser`=? AND `browser_version`=? AND `user_agent`=?
              AND `action`=? AND `page`=? AND `method`=?
            ORDER BY `created_at` DESC LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $userId, $ip,
            $geo['country'], $geo['region'], $geo['city'],
            $geo['lat'], $geo['lat'],
            $geo['lon'], $geo['lon'],
            $device, $browser, $browserVersion, $ua,
            $action, $page, $method
        ]);
        $last = $stmt->fetch(PDO::FETCH_ASSOC);

        // 2) If same GET/POST, increment review
        if ($last && $last['get_params'] === $getParams && $last['post_params'] === $postParams) {
            $upd = $this->pdo->prepare(
                "UPDATE `activities` SET `review` = `review` + 1 WHERE `id` = ?"
            );
            $upd->execute([$last['id']]);
            return;
        }

        // 3) Otherwise insert new record
        $sql = "INSERT INTO `activities`
            (`user_id`,`ip`,`country`,`region`,`city`,`latitude`,`longitude`,`device`,
             `browser`,`browser_version`,`user_agent`,`action`,`page`,`method`,
             `get_params`,`post_params`,`data`,`review`)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,1)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $userId, $ip,
            $geo['country'], $geo['region'], $geo['city'],
            $geo['lat'], $geo['lon'],
            $device, $browser, $browserVersion, $ua,
            $action, $page, $method,
            $getParams, $postParams, json_encode($data)
        ]);
    }

    /**
     * Fetch activities for DataTables (server-side processing).
     * @param array $params DataTables parameters
     * @return array
     */
    public function fetchForDataTables(array $params): array {
        $start  = (int)($params['start'] ?? 0);
        $length = (int)($params['length'] ?? 10);
        $search = trim($params['search']['value'] ?? '');

        // Build filters
        $whereClauses = [];
        $bindings     = [];
        foreach (['user_id','action','page','method'] as $col) {
            if (!empty($params[$col])) {
                $whereClauses[] = "activities.`$col` = :$col";
                $bindings[":$col"] = $params[$col];
            }
        }
        if ($search !== '') {
            $whereClauses[] = "(`action` LIKE :search OR activities.`page` LIKE :search)";
            $bindings[':search'] = "%$search%";
        }
        $where = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

        // Total count
        $totalStmt = $this->pdo->prepare("SELECT COUNT(*) FROM `activities`");
        $totalStmt->execute();
        $total = (int)$totalStmt->fetchColumn();

        // Filtered count
        $filteredStmt = $this->pdo->prepare("SELECT COUNT(*) FROM `activities` $where");
        $filteredStmt->execute($bindings);
        $filtered = (int)$filteredStmt->fetchColumn();

        // Fetch data including new fields
        $sql = "SELECT activities.`id`,activities.`user_id`,activities.`ip`,activities.`country`,activities.`region`,activities.`city`,activities.`latitude`,activities.`longitude`,activities.`action`,activities.`page`,activities.`method`,
                       activities.`device`,activities.`browser`,activities.`browser_version`,activities.`get_params`,activities.`post_params`,activities.`review`,activities.`created_at`,
                       CASE WHEN accounts.role = 'teacher' THEN CONCAT(teachers.firstname, ' ', teachers.lastname) ELSE CONCAT(agents.firstname, ' ', agents.lastname) END AS user_name
                FROM `activities` 
                    LEFT JOIN `accounts` ON (accounts.id = activities.user_id)
                    LEFT JOIN `teachers` ON (teachers.user_id = accounts.id AND accounts.role = 'teacher')
                    LEFT JOIN `agents` ON (agents.user_id = accounts.id AND accounts.role = 'agent')
                $where
                ORDER BY activities.`created_at` DESC
                LIMIT :start, :length";
        $stmt = $this->pdo->prepare($sql);
        foreach ($bindings as $key => $val) {
            $stmt->bindValue($key, $val, PDO::PARAM_STR);
        }
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
        $stmt->bindValue(':length', $length, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'draw'            => (int)($params['draw'] ?? 0),
            'recordsTotal'    => $total,
            'recordsFiltered' => $filtered,
            'data'            => $rows,
        ];
    }

    /**
     * Get browser name using Agent.
     */
    protected function getBrowser(): string {
        return $this->agent->browser();
    }

    /**
     * Get browser version using Agent.
     */
    protected function getBrowserVersion(): string {
        return $this->agent->version($this->agent->browser());
    }

    public function getActivityById(int $id): ?array {
        $stmt = $this->pdo->prepare("SELECT `id`, `user_id`, `ip`, `country`, `region`, `city`, `latitude`, `longitude`, `page`, `review`, `device`, `browser`, `browser_version`, `user_agent`, `action`, `method`, `data`, `get_params`, `post_params`, `created_at` FROM `activities` WHERE `id`=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Detect device type from User-Agent.
     */
    protected function detectDevice(string $ua): string {
        if (preg_match('/Mobile|Android|iPhone|iPod/i', $ua)) return 'Mobile';
        if (preg_match('/Tablet|iPad/i', $ua)) return 'Tablet';
        return 'Desktop';
    }

    /**
     * Geolocate IP via ip-api.com (includes latitude & longitude).
     */
    protected function getGeolocation(string $ip): array {
        $resp = @file_get_contents("http://ip-api.com/json/{$ip}");
        $data = $resp ? json_decode($resp, true) : [];
        return [
            'country'=> $data['country']    ?? null,
            'region' => $data['regionName'] ?? null,
            'city'   => $data['city']       ?? null,
            'lat'    => $data['lat']        ?? null,
            'lon'    => $data['lon']        ?? null,
        ];
    }

    /**
     * Récupère les comptes (teachers + agents) avec :
     * - activity_count   : nombre total d’activités (0 si aucune)
     * - last_activity    : date de la dernière activité (NULL si aucune)
     * 
     * Pour DataTables (server-side JSON).
     *
     * @param array $params  Paramètres DataTables (draw, start, length, search[value])
     * @return array         Réponse JSON pour DataTables
     */
    public function fetchAccountActivitiesForDataTables(array $params): array
    {
        $start       = (int)($params['start']  ?? 0);
        $length      = (int)($params['length'] ?? 10);
        $searchValue = trim($params['search']['value'] ?? '');

        // Filtre de recherche (sur firstname, lastname, user_type)
        $where    = '';
        $bindings = [];
        if ($searchValue !== '') {
            $where = "WHERE t.firstname LIKE :search
                    OR t.lastname  LIKE :search
                    OR t.user_type LIKE :search";
            $bindings[':search'] = "%{$searchValue}%";
        }

        // 1) Comptage total (avant filtre)
        $sqlTotal = "
        SELECT COUNT(*) FROM (
            SELECT personal.id, personal.user_id FROM teachers AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
            UNION DISTINCT
            SELECT personal.id, personal.user_id FROM agents AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
        ) AS t_all";
        $recordsTotal = (int)$this->pdo->query($sqlTotal)->fetchColumn();

        // 2) Comptage filtré
        $sqlFiltered = "
        SELECT COUNT(*) FROM (
            SELECT personal.id, personal.user_id, 'teacher' AS user_type,
                personal.firstname, personal.lastname
            FROM teachers AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
            UNION DISTINCT
            SELECT personal.id, personal.user_id, 'agent' AS user_type,
                personal.firstname, personal.lastname
            FROM agents AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
        ) AS t
        {$where}";
        $stmt = $this->pdo->prepare($sqlFiltered);
        foreach ($bindings as $k => $v) {
            $stmt->bindValue($k, $v, PDO::PARAM_STR);
        }
        $stmt->execute();
        $recordsFiltered = (int)$stmt->fetchColumn();

        // 3) Données détaillées + stats d’activités
        $sqlData = "
        SELECT
            t.id            AS personal_id,
            t.user_type,
            t.user_id       AS account_id,
            t.firstname,
            t.lastname,
            t.gender,
            t.matricul,
            t.birthday,
            t.Joining_date,
            t.role,
            t.phone,
            IFNULL(s.activity_count, 0)   AS activity_count,
            s.last_activity
        FROM (
            SELECT personal.id, personal.user_id, 'teacher' AS user_type,
                personal.firstname, personal.lastname, personal.gender,
                personal.matricul, personal.birthday, personal.Joining_date,
                personal.role, personal.phone
            FROM teachers AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
            UNION DISTINCT
            SELECT personal.id, personal.user_id, 'agent' AS user_type,
                personal.firstname, personal.lastname, personal.gender,
                personal.matricul, personal.birthday, personal.Joining_date,
                personal.role, personal.phone
            FROM agents AS personal
            WHERE personal.`delete`=0 AND personal.active=1 AND personal.valide=1
        ) AS t
        LEFT JOIN (
            SELECT user_id,
                COUNT(*)    AS activity_count,
                MAX(created_at) AS last_activity
            FROM activities
            GROUP BY user_id
        ) AS s ON s.user_id = t.user_id
        {$where}
        ORDER BY IFNULL(s.activity_count, 0) DESC
        LIMIT :start, :length";
        $stmt = $this->pdo->prepare($sqlData);
        // binds recherche
        foreach ($bindings as $k => $v) {
            $stmt->bindValue($k, $v, PDO::PARAM_STR);
        }
        // binds pagination
        $stmt->bindValue(':start',  $start,  PDO::PARAM_INT);
        $stmt->bindValue(':length', $length, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'draw'            => (int)($params['draw'] ?? 0),
            'recordsTotal'    => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data'            => $data,
        ];
    }


}
