<?php

$year = date("Y");

$YEAR = getYearFromDatabaseName($MINE_dbn??"")??$year;

postCaches("section_classe", postCaches("section_std", "*"));
postCaches("option_classe", postCaches("option_std", "*"));
postCaches("level_classe", postCaches("level_std", "*"));
$anacad = postCaches("promotion_classe", postCaches("promotion_std", $YEAR));

$inArchive = !in_array($anacad, [$year, '*']);
$prefix = $inArchive ? "snem_$anacad" : 'snem';
try {
  $stmt = $db_pdo->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$prefix'");
  $dbExists = $stmt->fetch();

  if (!$dbExists) {
    $IN_MAINTENANCE_MESSAGE = "Undefined Archive Database $prefix";
    // $IN_MAINTENANCE = 1;
    $prefix = 'snem';
    $inArchive = false;
  }
} catch (PDOException $e) {
  die($e);
  $IN_MAINTENANCE_MESSAGE = $e;
  // $IN_MAINTENANCE = 1;
  $prefix = 'snem';
  $inArchive = false;
}

$useArchive = $inArchive ?"/app/archive/$anacad":'';


function hasCrrentAcad() {
  global $YEAR, $anacad, $year, $inArchive, $prefix, $useArchive;
  
  $anacad = $YEAR;
  $inArchive = !in_array($anacad, [$year, '*']);
  
  $prefix = $inArchive ? "snem_$anacad" : 'snem';
  $useArchive = $inArchive ?"/app/archive/$anacad":'';
}