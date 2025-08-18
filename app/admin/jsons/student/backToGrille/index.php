<?php require_once "../../../../settings/params/connect"; $r = 204;
    if(isset($_GET['std']) && is_numeric($_GET['std'])){
        $state = isset($_GET['state'])?"'$_GET[state]'" : 'NULL';
        if($db_poo->query("UPDATE students SET finish_in = $state WHERE id = $_GET[std]") or $r=500) $r = 201;
    } die(http_response_code($r));