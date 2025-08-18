<?php
class database extends mysqli
{
    public static $db;
    public $table = false;
    public $default_query = '';
    public function __construct(
        $host = 'localhost',
        $user = 'root',
        $pass = '$%Tudent2022',
        $db = 'snem',
        $port = 3306,
        $socket = null,
        $charset = 'utf8mb4'
    )
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        parent::__construct($host, $user, $pass, $db, $port, $socket);
        $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        $this->set_charset($charset);
        $this->checkTable();
    }
    // Static Functions
    public static function getInstance(): self
    {
        return (is_null(self::$db)) ? self::$db = new self() : self::$db;
    }
    
    public function debug($value): self
    {
        debug($value);
    }

    public function checkTable(): void
    {
        if (!$this->query("SHOW TABLES LIKE '" . $this->_getTable() . "'")->num_rows && $this->default_query != '')
            $this->pdo->exec($this->default_query);
    }
    // Private Functions
    final public function _getTable(): string
    {
        return $this->table ?? __CLASS__;
    }
    public function get_result(string $query)
    {
        $request = $this->get_exec($query);
        $r = [];
        while ($row = $request->fetch_object())
            $r[] = $row;
        return $r;
    }
    public function get_exec(string $query)
    {
        if (!$this->_getTable())
            return (object) ['ERROR' => 'TABLE_NAME_NOT_FOUND'];
        return $this->query($query);
    }
    public function _select(
        array $_select = ['*'], string $_from = null,
        $_where = ['deleted_at IS NULL'],
        array $_join = [], array $_order = ['id'],
        $_limit = false
    )
    {
        $from = is_null($_from) ? $this->_getTable() : $_from;
        $select = $where = "$from.id";
        $order = ' ORDER BY ';
        $join = '';
        foreach ($_select as $col)
            if (is_array($col)) foreach ($col as $joinin => $joincol)
                    $select .= ", $joinin.$joincol";
            else
                $select .= ", $from.$col"; foreach ($_where as $col)
            if (is_array($col)) foreach ($col as $joinin => $joincol)
                    $where .= " AND ($joinin.$joincol)";
            else
                $where .= " AND ($from.$col)"; foreach ($_join as $joinin => $keys) {
            $join .= "JOIN $joinin ON (";
            foreach ($keys as $a => $b)
                $join .= "$joinin.$a=$from.$b";
            $join .= ') ';
        }foreach ($_order as $key => $direction)
            $order .= is_numeric($key) ? "$direction" : "$key $direction";
        $limit = $_limit ? 'LIMIT ' . $_limit : '';
        return $this->get_result("SELECT $select FROM $from $join WHERE $where $order $limit") ?? (object) [];
    }
    private function _exec(string $table, string $action, $data, string $join = ''): bool
    {
        return (true) ? true : false;
    }
    // No-Static Functions
    public function select(string $query = 'SELECT * FROM this_table')
    {
        return $this->get_result($query == 'SELECT * FROM this_table' ? 'SELECT * FROM ' . $this->_getTable() : $query);
    }
    public function all()
    {
        return $this->_select(['*'], null, ['deleted_at IS NULL']) ?? (object) [];
    }
    public function all_()
    {
        return $this->_select(['*'], null, ['deleted_at IS NOT NULL']);
    }
    public function find(int $id = 0)
    {
        return $this->_select(['*'], null, ['id=' . $id, 'deleted_at IS NULL'])[0] ?? [];
    }
    public function find_(int $id = 0)
    {
        return $this->_select(['*'], null, ['id=' . $id, 'deleted_at IS NOT NULL'])[0] ?? [];
    }
    public function findWhere(array $data)
    {
        $data_formated = $separator = '';
        foreach ($data as $key => $value) {
            $data_formated .= $separator . "$key = '$value'";
            $separator = " OR $this->table.";
        }
        return $this->where([$this->table => $data_formated]);
    }
    public function where(array $where = [])
    {
        return $this->_select(['*'], null, array_merge(['deleted_at IS NULL'], $where));
    }
    public function where_(array $where = [])
    {
        return $this->_select(['*'], null, $where[] = 'deleted_at IS NOT NULL');
    }
    public function insert($data)
    {
        $table = $this->_getTable();
        $separator = '';
        $query = "INSERT IGNORE INTO $table SET ";
        foreach ($data as $k => $value) {
            $v = ($value === NULL) ? 'NULL' : "'" . $this->real_escape_string($value) . "'";
            $query .= $separator . " $table.$k=$v";
            $separator = ', ';
        }
        return $this->get_exec($query);
    }
    public function update($data, int $id)
    {
        $table = $this->_getTable();
        $separator = '';
        $query = "UPDATE `$table` SET ";
        foreach ($data as $k => $value) {
            $v = ($value === NULL) ? 'NULL' : "'" . $this->real_escape_string($value) . "'";
            $query .= $separator . "`$table`.`$k`=$v";
            $separator = ', ';
        }
        $query .= " WHERE `$table`.`id` = $id";
        return $this->get_exec($query);
    }
    public function switch_active(int $id)
    {
        $table = $this->_getTable();
        return $this->get_exec("UPDATE $table SET $table.active = !$table.active WHERE $table.id = $id");
    }
    public function delete(string $enc)
    {
        $table = $this->_getTable();
        return $this->get_exec("UPDATE $table SET $table.deleted_at = CURRENT_TIMESTAMP() WHERE $table.enc = '$enc'");
    }
    public function restore(string $enc)
    {
        $table = $this->_getTable();
        return $this->get_exec("UPDATE $table SET $table.deleted_at = NULL WHERE $table.enc = '$enc'");
    }
}

interface TableModel
{

}