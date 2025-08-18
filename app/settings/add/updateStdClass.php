<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($student) && is_numeric($student)){
            $std = $db_poo->query("SELECT `key`, `class` FROM students WHERE students.id = $student AND students.delete = 0 AND students.active = 1")->fetch_object();
            if($std->key ?? false){
                if(!$db_poo->query("SELECT * FROM snem.students WHERE `key` = '$std->key'")->num_rows){
                    $dte = md5(time()).sha1(time());
                    $nextClass = [
                        // Preparatoir - TCI
                        26=>6,
                        27=>7,
                        28=>8,
                        29=>9,
                        30=>25,
                        31=>10,
                        32=>11,
                        33=>12,
                        34=>13,
                        35=>14,
                        36=>15,
                        37=>16,
                        38=>17,
                        39=>18,
                        40=>19,
                        41=>20,
                        42=>21,
                        43=>22,
                        44=>23,
                        45=>24,

                        // Aviation
                        54=>53,
                        55=>56,
                        57=>145,
                        142=>59,
                        61=>60,
        
                        // Environement
                        65=>67,
                        70=>74,
                        62=>66,
                        72=>75,
                        64=>68,
                        71=>76,
                        63=>69,
                        73=>77,
        
                        // Maintenance
                        127=>128,
                        85=>87,
                        79=>80,
                        78=>83,
                        84=>86,
        
                        // Mecanique
                        96=>98,
                        97=>99,
                        91=>88,
                        92=>89,
                        93=>90,
                        95=>100,
                        94=>101,
        
                        // Informatique
                        102=>103,
        
                        // Electricite
                        107=>108,
                        109=>110,
                        105=>106,
                        112=>111,
                        114=>113,
        
                        // Electronique
                        115=>118,
                        133=>134,
                        135=>136,
                        121=>124,
                        123=>122,
                        126=>125,
                        139=>140
                    ][$std->class]??0;
                    if(!$nextClass) Responser::json([
                        'message' => 'class id not allowed',
                        'class' => [
                            'prev' => $std->class,
                            'next' => $nextClass
                        ]
                    ]);
                    mysqli_query($db,
                        "INSERT IGNORE INTO `snem`.`students` (
                            `setStorage`,
                            `user_id`, 
                            `username`, 
                            `firstname`, 
                            `lastname`, 
                            `gender`, 
                            `parent_work`, 
                            `title`, 
                            `speciality`, 
                            `pourcentage`, 
                            `title_code`, 
                            `father`, 
                            `mother`, 
                            `birthday`, 
                            `profile`, 
                            `religion`, 
                            `biographie`, 
                            `Joining_date`, 
                            `std_promotion`, 
                            `role`, 
                            `class`, 
                            `email`, 
                            `address`, 
                            `phone`, 
                            `valide`, 
                            `active`, 
                            `suspend`, 
                            `mcisme_1`, 
                            `mcisme_2`, 
                            `data_encrypt`
                        ) SELECT 
                            'passed',
                            `user_id`, 
                            `username`, 
                            `firstname`, 
                            `lastname`, 
                            `gender`, 
                            `parent_work`, 
                            `title`, 
                            `speciality`, 
                            `pourcentage`, 
                            `title_code`, 
                            `father`, 
                            `mother`, 
                            `birthday`, 
                            'profile', 
                            `religion`, 
                            `biographie`, 
                            `Joining_date`, 
                            `std_promotion`+1, 
                            `role`, 
                            '$nextClass', 
                            `email`, 
                            `address`, 
                            `phone`, 
                            `valide`, 
                            `active`, 
                            `suspend`, 
                            'mcisme_1', 
                            `mcisme_2`, 
                            '$dte'
                        FROM `students` WHERE `students`.`id` = $student"
                    ) or Responser::json([
                        "status" => "error",
                        "code" => "5017",
                        "content" => "Error SQL : ".mysqli_error($db)
                    ]);
                    Responser::json([
                        "status" => "succes",
                        "code" => "4200",
                        "content" => $dte
                    ]);
                } else {
                    die(json_encode([
                        "status" => "error",
                        "code" => "5022",
                        "content" => "Etudiant déjà enregistrer dans la base de données"
                    ])); 
                }
            } else Responser::json([
                "status" => "error",
                "code" => "5022",
                "content" => "L'étudiant séléctionner n'est pas disponible !"
            ]);
        } else Responser::json([
            "status" => "error",
            "code" => "5021",
            "content" => "Une erreur est survenu lors de l'envoie de votre requette !"
        ]);
    } else Responser::json([
        "status" => "error",
        "code" => "5020",
        "content" => "Paramètre non valide"
    ]);
?>