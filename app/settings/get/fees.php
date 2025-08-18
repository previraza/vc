<?php session_start();
    if(isset($_POST['level'])){
        require_once "../params/connect";
        $std = $db_pdo->prepare("SELECT id, name AS text FROM snem.financy_fee WHERE deleted_at IS NULL AND (`level` IS NULL ".($_POST['level']!='*'?' OR `level` = :level':null).')');
        $_POST['level']!='*'?$std->bindValue(':level', $_POST['level']):null;
        $std->execute();
        die(json_encode($std->fetchAll(PDO::FETCH_ASSOC)));
    }else die(json_encode(array(
        'id' => 0,
        'text' => "Une erreur s'est produit pendant l'obtention de la liste des options de cette level"
    )));