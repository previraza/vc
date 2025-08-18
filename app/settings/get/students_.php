<?php session_start();
    if(isset($_POST['class'])){
        $DB = $_POST['promotion'] < 2022 ?('snem_'.$_POST['promotion'].'.') :  '' ;
        require_once "../params/connect";
        $std = $db_pdo->prepare(
            "SELECT std.id, CONCAT(std.firstname, ' ', std.lastname) AS text FROM {$DB}students AS std WHERE std.active = 1 AND std.delete = 0 AND std.class = :class"
        ); $std->bindValue(':class', $_POST['class']);
        $std->execute();
        die(json_encode($std->fetchAll(PDO::FETCH_ASSOC)));
    }else die(json_encode(array(
        'id' => 0,
        'text' => "Une erreur s'est produit pendant l'obtention de la liste des étudiants de cette classes"
    )));