<?php session_start();
$profile = '/layouts/default/img/figure/admin.webp';
require_once "../params/connect";
if (isset($_POST['CON_47']) && isset($_GET['sending_by'])) {
    extract(array_trait_string($_POST));
    if (mysqli_num_rows(mysqli_query($db, "SELECT * FROM students WHERE id=$this_id ORDER BY title DESC, firstname"))) {
        if (mysqli_num_rows(mysqli_query($db, "SELECT id FROM classes WHERE id = $class AND active = 1 AND `delete` = 0"))) {
            $dte = md5(time()) . sha1(time());
            mysqli_query($db, "UPDATE `students` SET
                                    `id` = $this_id,
                                    `firstname` = '$firstname', 
                                    `lastname` = '$lastname', 
                                    `gender` = '$gender', 
                                    `parent_work` = '$parent_work', 
                                    `title` = '$title',
                                    `speciality` = '$speciality', 
                                    `pourcentage` = '$pourcentage', 
                                    `title_code` = '$titleCode', 
                                    `father` = '$father', 
                                    `class` = '$class', 
                                    `mother` = '$mother', 
                                    `birthday` = '$birthday', 
                                    `religion` = '$religion', 
                                    `biographie` = '$biographie', 
                                    `role` = '$role', 
                                    `email` = '$email', 
                                    `address` = '$address', 
                                    `phone` = '$phone', 
                                    `data_encrypt`='$dte'
                                WHERE `id` = $this_id") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : " . mysqli_error($db)
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
                "content" => "La classes selectionner n'existe pas !"
            )));
        }
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5022",
            "content" => "Profile de l'étudiant selectionner est introuvable dans la base de données"
        )));
    }
} else {
    die(json_encode(array(
        "status" => "error",
        "code" => "5020",
        "content" => "Paramètre non valide"
    )));
}
