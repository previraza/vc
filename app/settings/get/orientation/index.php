<?php require_once '../free.php';
   // GETING PAYMENT

   function json($array){
      die(json_encode($array));
   } $code = $_GET['code']??'';

   $fc = $_db->query(
      "SELECT 
         students.id, students.key, students.class, CONCAT(students.firstname,' ',students.lastname) AS fullname,
         level.id AS `level`, level.next AS `next_level`, options.id AS `option`, sections.id AS `section`,
         level.system AS sys, payments.id AS payment,
         level.system AS sys, payments2.id AS payment2
      FROM students 
         LEFT JOIN snem.financy_payment AS payments ON (payments.student = students.id AND payments.fee = 8)
         LEFT JOIN snem.financy_slip AS payments2 ON (payments2.student = students.id AND payments2.fee = 8)
         LEFT JOIN classes  ON classes.id  = students.class 
         LEFT JOIN sections ON sections.id = classes.section 
         LEFT JOIN options  ON options.id  = classes.option 
         LEFT JOIN level    ON level.id    = classes.level 
      WHERE students.key = '$code';
   ");
   if($fc->num_rows === 0) json(['status'=>'error', 'content'=>'L\'étudiant sélectionné semble être indisponible pour le moment !']);
   $std = $fc->fetch_object();
   if($std->payment === NULL && $std->payment2 === NULL ) json(['status'=>'info', 'content'=>'L\'étudiant sélectionné est en attente du paiement des frais de Réinscription/Orientation']);
   else include './'.(file_exists($file = strtolower($std->sys).'.bin') ? $file : '404.bin');
