<?php session_start();
   $prefix  = (!isset($_GET['y']) || !is_numeric($_GET['y'])) ? '' : '_'.$_GET['y'] ; 
   require_once '../../../../settings/params/connect';
   $fc = $db_pdo->prepare(
      "SELECT 
         snem$prefix.classes.id, snem$prefix.classes.name AS class, snem$prefix.classes.next AS `next`, snem$prefix.level.terminal, snem$prefix.level.system
      FROM snem$prefix.classes       
         LEFT JOIN snem$prefix.level    ON snem$prefix.level.id    = snem$prefix.classes.level 
      WHERE snem$prefix.classes.id = ?
   "); 
   $fc->execute([isset($_GET['class'])?$_GET['class']:'']);
   $class = $fc->fetch(PDO::FETCH_OBJ);
   if (empty($class)) die('<h1>Auccun Resultat N\'a ete trouvez !</h1>');
   $class->data = array();
   include './'.(file_exists($file = strtolower($class->system).'.bin') ? $file : '404.bin');