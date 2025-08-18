<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($level, $year, $solde, $account, $devise, $type)){
            if (!mysqli_num_rows(mysqli_query($db, "SELECT id FROM frais WHERE level = $level AND year = $year AND type = '$type' AND `delete` = 0"))) { 
                $dte = md5(time()).sha1(time());
                mysqli_query($db, 
                    "INSERT INTO `frais` (
                        `type`, `level`, `year`,
                        `account`, `solde`, `devise`,
                        `data_encrypt`
                    ) VALUES (
                        '$type', $level, $year, 
                        $account, $solde, '$devise',
                        '$dte'
                    )"
                ) or die(json_encode(array(
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
                    "status" => "warning",
                    "code" => "5022",
                    "content" => "Le frais dont vous essayez d'enregistrer existe déjà !"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "warning",
                "code" => "5022",
                "content" => "Veuillez rempliser tout les formulaire"
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