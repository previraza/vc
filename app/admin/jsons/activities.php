<?php session_start();
   require_once __DIR__.'/../../settings/params/connect';
   require_once __DIR__.'/../class/activities.php';
   
   $logger = new ActivityLogger($db_pdo);

  if (isset($_GET['route']) && $_GET['route'] === 'fetch') { 
    header('Content-Type: application/json');
    echo json_encode($logger->fetchForDataTables($_GET));
    exit;
  } else if (isset($_GET['route']) && $_GET['route'] === 'fetch-accounts') { 
    header('Content-Type: application/json');
    echo json_encode($logger->fetchAccountActivitiesForDataTables($_GET));
    exit;
  }