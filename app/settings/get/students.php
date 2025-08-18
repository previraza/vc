<?php session_start();
    if(isset($_POST['class'])){
        require_once "../params/connect";
        $std = $db_pdo->prepare(
            is_numeric($_POST['class'])?
            "SELECT students.id, CONCAT(students.firstname, ' ', students.lastname) AS text FROM students WHERE students.active = 1 AND students.delete = 0 AND students.class = :class":
            "SELECT register.id, CONCAT(register.nom, ' ', register.postnom) AS text FROM register LEFT JOIN payments ON payments.student = register.id WHERE register.active = 1 AND register.delete = 0 AND register.traite = 0 AND payments.id IS NULL"
        );
        $std->bindValue(':class', $_POST['class']);
        $std->execute();
        die(json_encode($std->fetchAll(PDO::FETCH_ASSOC)));
    }else die(json_encode(array(
        'id' => 0,
        'text' => "Une erreur s'est produit pendant l'obtention de la liste des étudiants de cette classes"
    )));