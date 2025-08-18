<?php require_once '../../free.php';
    $std_id = $_GET['std']??false;
    $std_class = $_GET['class']??false;
    if(
        isset($_GET['MCISME']) && 
        $std_class && $std_id &&
        is_numeric($_GET['MCISME']) &&
        is_numeric($std_class) && 
        is_numeric($std_id)
    ){
        $std_key = $_db->query("SELECT `key` FROM snem.students WHERE id = $std_id")->fetch_object()->key??'';
        $std_exist = $_db->query("SELECT `class` FROM snem.students WHERE `key` = '$std_key'") or die($_db->error);
        if($std_exist->num_rows){
            if($std_exist->fetch_object()->class == $std_class) die(http_response_code(205));
            die(http_response_code(206));
        } $rqt = $_db->query(
            "INSERT INTO snem.students (
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
                `key`, 
                `key2`, 
                `data_encrypt`
            ) SELECT 
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
                `std_promotion`+1, 
                `role`, 
                '$std_class', 
                `email`, 
                `address`, 
                `phone`, 
                `valide`, 
                `active`, 
                `suspend`, 
                'mcisme_1', 
                `mcisme_2`, 
                `key`, 
                `key2`, 
                '$dte'
            FROM snem.students WHERE snem.students.id = $std_id"
        ); die(http_response_code(205));
    } die(http_response_code(204));