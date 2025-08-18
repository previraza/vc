<?php session_start();
   require_once '../../../settings/params/connect';
   $fc = $db_pdo->prepare(
      "SELECT 
         classes.id, classes.name AS class, classes.next AS `next`, level.terminal, level.system
      FROM classes       
         LEFT JOIN level    ON level.id    = classes.level 
      WHERE classes.delete = 0 AND classes.active = 1
   "); 
   $fc->execute();
   json_response(200, 'Tous les cours', $fc->fetchAll(PDO::FETCH_OBJ));