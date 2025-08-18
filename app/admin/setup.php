<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once __DIR__."{$DS}class{$DS}activities.php";
$logger = new ActivityLogger($db_pdo);
$logger->log('page-access', [
  'srv' => $_SERVER,
  'req' => $_REQUEST,
  'ses' => $_SESSION,
]);