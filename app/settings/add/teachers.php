<?php session_start();
    $profile = '/layouts/default/img/figure/admin.webp';    
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        function trilam($phone){
            $r=$s=''; foreach ($phone as $f)
                $r.=$s.$f;$s=' | ';
            return $r;
        } $phone = trilam($phone); $child = trilam($child);
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM teachers WHERE (firstname = '$firstname' AND lastname = '$lastname' AND phone = '$phone' OR (role = '$role' AND (role = 'DG' OR role = 'DC'  OR role = 'AB' OR role = 'SA' OR role = 'SR' OR role = 'SG'))) OR matricul = '$matricule' AND `delete` = 0 ORDER BY title DESC, firstname"))){
            $dte = md5(time()).sha1(time());
            mysqli_query($db,"INSERT INTO `teachers` (
                                `user_id`, 
                                `firstname`, 
                                `lastname`, 
                                `gender`, 
                                `matricul`, 
                                `birthday`, 
                                `father`, 
                                `mother`, 
                                `role`, 
                                `title`, 
                                `speciality`, 
                                `Joining_date`, 
                                `acte`,
                                `country`,
                                `profile`, 
                                `religion`, 
                                `activity`,
                                `observation`,  
                                `email`, 
                                `address`, 
                                `work`, 
                                `phone`,
                                
                                `biographie`,
                                `siteweb`,
                                `facebook`,
                                `linkedin`,
                                `twitter`,
                                `telegram`,
                                `etatcivil`,
                                `child`,
                                `parcours`,
                                `communication`,
                                `consultation`,
                                `manage`,

                                `active`, 
                                `delete`, 
                                `mcisme_1`, 
                                `mcisme_2`, 
                                `data_encrypt`
                            ) VALUES (
                                '$mine', 
                                '$firstname', 
                                '$lastname', 
                                '$gender', 
                                '$matricule', 
                                '$birthday', 
                                '$father', 
                                '$mother', 
                                '$role', 
                                '$title', 
                                '$speciality', 
                                '$Joining_date', 
                                '$acte',
                                '$country',
                                '$profile', 
                                '$religion', 
                                '$activity',
                                '$observation',  
                                '$email', 
                                '$address', 
                                '',
                                '$phone',

                                '$biographie',
                                '$siteweb',
                                '$facebook',
                                '$linkedin',
                                '$twitter',
                                '$telegram',
                                '$etatcivil',
                                '$child',
                                '$parcours',
                                '$communication',
                                '$consultation',
                                '$management',
                                
                                1, 
                                0, 
                                NULL, 
                                NULL, 
                                ''
                            )") or die(json_encode(array(
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
                "content" => "Profile déjà enregistrer dans la base de données"
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