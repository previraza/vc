<?php session_start();
    if(isset($_POST['option'])){
        require_once "../params/connect";
        $std = $db_pdo->prepare("SELECT id, name AS text FROM snem.classes WHERE active = 1 AND `delete` = 0".($_POST['option']!='*'?' AND option = :option':null)." AND level = :level AND promotion = :promotion");
        $_POST['option']!='*'?$std->bindValue(':option', $_POST['option']):null;
        $std->bindValue(':promotion', $_POST['promotion']);
        $std->bindValue(':level', $_POST['level']);
        $std->execute();
        die(json_encode(array_merge(($res = $std->fetchAll(PDO::FETCH_ASSOC))?$res:[array('id' => '0', 'text' => "Aucune classe trouvé...")])));
    }else die(json_encode(array(
        'id' => 0,
        'text' => "Une erreur s'est produit pendant l'obtention de la liste de classes de cette catégorie"
    )));