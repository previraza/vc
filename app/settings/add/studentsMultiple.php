<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by']) && isset($_SESSION['USER']['id'])){
        if(isset($_POST['cla']) && is_numeric($_POST['cla']) && $_POST['cla']!=0){
            $d = mysqli_escape_string($db,isset($_POST['dte'])?$_POST['dte']:'MCISME');
            $mine = $_SESSION['USER']['id'];
            $dte = md5(time()).sha1(time());
            if(isset($_POST['std'])){
                $sql = "INSERT IGNORE INTO `students`(`class`,`firstname`,`lastname`,`gender`,`matricul`,`valide`,`mcisme_1`,`data_encrypt`) VALUES";
                $sp= ''; foreach ($_POST['std'] as $k => $n) {
                    $v = array_trait_string($n);
                    $v['gr'] = $v['gr']??'A'; $v['mt'] = $v['mt']??'';
                    $sql.= $sp."($_POST[cla],'$v[fn]','$v[ln]','$v[gr]','$v[mt]', 1,'$d','$dte')";
                    $sp = ",";
                } mysqli_query($db,$sql) or die(json_encode([
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".mysqli_error($db)
                ]));
                die(json_encode([
                    "status" => "succes",
                    "code" => "4200",
                    "content" => $dte
                ]));
            }else die(json_encode([
                "status" => "error",
                "code" => "5018",
                "content" => "Aucun étudiant detecter..."
            ]));
        } else {
            die(json_encode([
                "status" => "error",
                "code" => "5020",
                "content" => "Veuillez choisir une classe valide..."
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