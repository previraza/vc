    <?php session_start();
    require_once "../params/connect";
    function errAd($dte, $table, $err) {
        global $db_poo;
        $db_poo->query("DELETE FROM `$table` WHERE `data_encrypt` = $dte") OR die(json_encode([
            "status" => "error",
            "code" => "4221",
            "content" => "Votre requette s'est mal terminer !"
        ])) ;
        return json_encode([
            "status" => "error",
            "code" => "5017",
            "content" => "Error SQL : ".$err
        ]);
    }

    if(!($file = isset($_FILES['profile']) ? $_FILES['profile'] : false)) die(json_encode([
        "status" => "error","code" => "4100","content" => 'Impossible de charger l\'image'
    ]));
    if($file['size'] > .5*1028*1028) die(json_encode([
        "status" => "error","code" => "4101","content" => 'Image trop volumineux'
    ]));

    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST)); 
        $promotion = date('Y');
        $biographie = isset($biographie) ? $biographie : 'NULL';
        $promotion--;
        
        $code = str_replace(' ', '', $checkcode);
        if(!$code) die(json_encode([
            "status" => "error",
            "code" => "5023",
            "content" => $checkcode
        ]));

        $pay_stmt = $db_poo->query("SELECT `id`, `student_` AS student FROM `financy_payment` WHERE `code` = '$code' AND `fee` in (9, 34, 35, 36) AND `printed` = 1 AND deleted_at IS NULL;");
        if(strlen($code) < 10 || !$pay_stmt->num_rows) die(json_encode([
            "status" => "error",
            "code" => "5023",
            "content" => "Code non valide, Veuillez la verifier et reesayer"
        ]));
        
        $payment = $pay_stmt ? $pay_stmt->fetch_object() : null;

        $pay_used = $db_poo->query("SELECT * FROM students_ WHERE pcode = '$code' AND `delete` = 0 ORDER BY firstname")->num_rows;
        
        if(!!$pay_used || $payment->student) {
            die(json_encode([
                "status" => "error",
                "code" => "5024",
                "content" => "Ce numero de borderaux est déjà utilisé. Pour plus d'information, veillez contacter le service concerné."
            ]));
        }
        
        if(!$db_poo->query("SELECT * FROM students_ WHERE (firstname = '$firstname' AND lastname = '$lastname' AND `homename` = '$homename' AND `date_of_birth` = '$date_of_birth') AND `delete` = 0 ORDER BY firstname")->num_rows){
            $dte = md5(time()).sha1(time());
            $profile = "`profile`";
            if($file['size']){
                $profileDir = "app/datas/students/files/registrations/images/";
            $profileFile = $dte.ext_file($file['name']);
            $profile = $profileDir.$profileFile;
                if(!move_uploaded_file($file['tmp_name'], load_directory($profileDir).$profileFile)) die(json_encode(["status" => "error", "code" => "5022", "content" => "Erreur de mise en ligne"])); 
                $db_poo->query("INSERT INTO `students_` (
                    `user_id`, `matricul`, `parent_work`, `std_promotion`, 
                    `marital_status`, 
                    `date_of_birth`, 
                    `place_of_birth`, 
                    `nationality`, 
                    `firstname`, 
                    `lastname`, 
                    `homename`, 
                    `gender`, 
                    `title`, 
                    `father`, 
                    `mother`, 
                    `birthday`, 
                    `religion`, 
                    `biographie`, 
                    `Joining_date`, 
                    `class`, 
                    `email`, 
                    `address`, 
                    `phone`, 
                    `active`, 
                    `delete`, 
                    `mcisme_1`, 
                    `mcisme_2`, 
                    `data_encrypt`,
                    `secondary_school_name`,
                    `secondary_school_address`,
                    `humanities_monitoring_section`,
                    `name_of_examination_center`,
                    `place_of_obtaining_the_diploma`,
                    `year_of_graduation`,
                    `percentage`,
                    `diploma_number`,
                    `professional_activity`,
                    `post_secondary_studies`,
                    `profile`,
                    `pcode`
                ) VALUES (
                    0, '', '', '$promotion', 
                    '$marital_status', '$date_of_birth', 
                    '$place_of_birth', '$nationality', '$firstname', 
                    '$lastname', '$homename', '$gender', 
                    '$title',
                    '$father', '$mother', 
                    DATE(CURRENT_TIMESTAMP()), 
                    '$religion',  '$biographie', 
                    current_timestamp(), 
                    0, '$email', '$address', '$phone', 
                    1, 0, NULL, NULL, '$dte',
                    '$secondary_school_name',
                    '$secondary_school_address',
                    '$humanities_monitoring_section',
                    '$name_of_examination_center',
                    '$place_of_obtaining_the_diploma',
                    '$year_of_graduation',
                    '$percentage',
                    '$diploma_number',
                    '$professional_activity',
                    '$post_secondary_studies',
                    '$profile',
                    '$code'
                )") or die(errAd($dte, "deliberation", $db_poo->error));
                
                $std_id = $db_poo->insert_id;
                $db_poo->query("UPDATE financy_payment SET student_ = '$std_id' WHERE id = $payment->id");
                
                $_SESSION['GUEST']['registration'][] = $std_id;

                die(json_encode([
                    "status" => "succes",
                    "code" => "4200",
                    "content" => $std_id
                ]));
            } else json([
                "status" => "error",
                "code" => "5048",
                "content" => "Image non valide"
            ]);
        } else {
            die(json_encode([
                "status" => "error",
                "code" => "5022",
                "content" => "D'après les informations que vous avez fournies, vous semblez être déjà inscrit. Si cela semble être une erreur de notre part, veuillez contacter le service concerné pour plus d'informations."
            ])); 
        }
    } else {
        die(json_encode([
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ])); 
    }
?>
