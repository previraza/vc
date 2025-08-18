<?php session_start();
    if(isset($_POST['section'])){
        require_once "../params/connect";
        $std = $db_pdo->prepare("SELECT id, name AS text FROM options WHERE active = 1 AND `delete` = 0".($_POST['section']!='*'?' AND section = :section':null));
        $_POST['section']!='*'?$std->bindValue(':section', $_POST['section']):null;
        $std->execute();
        die(json_encode(array_merge($std->fetchAll(PDO::FETCH_ASSOC), [array('id' => '*', 'text' => "Toutes les options")])));
    }else die(json_encode(array(
        'id' => 0,
        'text' => "Une erreur s'est produit pendant l'obtention de la liste des options de cette section"
    )));