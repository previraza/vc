<?php session_start();
    $profile = '/layouts/default/img/figure/admin.webp';    
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM teachers WHERE id=$this_id ORDER BY title DESC, firstname"))){
            $dte = md5(time()).sha1(time());
            mysqli_query($db,"UPDATE `teachers` SET
                                `user_id`='$CON_47',
                                `firstname`='$firstname',
                                `lastname`='$lastname',
                                `gender`='$gender', 
                                `matricul`='$matricule', 
                                `birthday`= '$birthday',
                                `father`='$father',
                                `mother`='$mother',
                                `role`='$role',
                                `title`='$title',
                                `speciality`='$speciality', 
                                `Joining_date`='$Joining_date', 
                                `acte`='$acte',
                                `country`='$country',
                                `profile`='$profile', 
                                `religion`='$religion', 
                                `activity`='$activity',
                                `observation`='$observation',
                                `email`='$email',
                                `address`='$address', 
                                `work`='',
                                `phone`='$phone',
                                `biographie`='$biographie',
                                `siteweb`='$siteweb',
                                `facebook`='$facebook',
                                `linkedin`='$linkedin',
                                `twitter`='$twitter',
                                `telegram`='$telegram',
                                `etatcivil`='$etatcivil',
                                `child`='$child',
                                `parcours`='$parcours',
                                `communication`='$communication',
                                `consultation`='$consultation',
                                `active`=1,
                                `delete`=0, 
                                `mcisme_1`=NULL, 
                                `mcisme_2`=NULL, 
                                `data_encrypt`='$dte'
                            WHERE `id` = $this_id") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));
            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $dte
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "Profile de l'enseignant introuvable dans la base de données"
            ))); 
        }
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }
?>