<?php session_start();
   require_once '../../../../settings/params/connect';
   $fc = $db_pdo->prepare(
      "SELECT 
         students.id, students.class, CONCAT(students.firstname,' ',students.lastname) AS fullname, students.key,
         level.name AS `level`, options.name AS `option`, sections.name AS `section`,
         level.system AS sys, classes.name AS class_name
      FROM students       
         LEFT JOIN classes  ON classes.id  = students.class 
         LEFT JOIN sections ON sections.id = classes.section 
         LEFT JOIN options  ON options.id  = classes.option 
         LEFT JOIN level    ON level.id    = classes.level 
      WHERE students.class = ?
   "); 
   // MCISME
   // $fc->execute([isset($_GET['class'])?$_GET['class']:0]);
   $fc->execute([0]);
   $stds = $fc->fetchAll(PDO::FETCH_OBJ);
   if (!empty($stds)){ 
      foreach ($stds as $std) {
         $stdKey = $std->key == (isset($_GET['code'])?$_GET['code']:'');
         include '../student-resultat/'.(file_exists($file = strtolower($std->sys).'.bin') ? $file : '404.bin');
      } ?>
      <script
         src="../assets/js/vendor/jquery-3.6.0.min.js"></script><script
         src="../assets/js/app.min.js"></script><script
         src="../assets/js/main.js"></script><script>
            document.querySelectorAll('.qrcode').forEach(e => new QRCode(e, {
                  text: e.dataset.code,
                  width: 125,
                  height: 125,
                  colorDark : '#000',
                  colorLight : '#fff',
                  correctLevel : QRCode.CorrectLevel.H
               })
            );
      </script>

   <?php } else die('<h1>Auccun Resultat N\'a ete trouvez !</h1>');