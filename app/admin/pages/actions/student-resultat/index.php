<?php session_start();
   require_once '../../../../settings/params/connect';
   $table = 'snem'; if(isset($_GET['anacad']) && is_numeric($_GET['anacad'])) $table .= "_$_GET[anacad]";
   $fc = $db_pdo->prepare(
      "SELECT 
         $table.students.id,  $table.sections.id AS sec_id, $table.students.key, $table.students.class, CONCAT($table.students.firstname,' ',$table.students.lastname) AS fullname,
         $table.level.name AS `level`, $table.options.name AS `option`, $table.sections.name AS `section`, $table.classes.delib, $table.classes.modify,
         $table.level.system AS sys, $table.classes.name AS class_name
      FROM $table.students       
         LEFT JOIN $table.classes  ON $table.classes.id  = $table.students.class 
         LEFT JOIN $table.sections ON $table.sections.id = $table.classes.section 
         LEFT JOIN $table.options  ON $table.options.id  = $table.classes.option 
         LEFT JOIN $table.level    ON $table.level.id    = $table.classes.level 
      WHERE $table.students.key = ?
   "); 
   $fc->execute([isset($_GET['code'])?$_GET['code']:'']);
   $std = $fc->fetch(PDO::FETCH_OBJ);
   if (empty($std)) die('<h1>Auccun Resultat N\'a ete trouvez !</h1>');
   if($std->delib == 1) die('<h1>En attente de la fin de la délibération !</h1>');
   if($std->modify == 1) die('<h1>En attente de la fin du traitement de la delibération !</h1>');
   include './'.(file_exists($file = strtolower($std->sys).'.bin') ? $file : '404.bin');