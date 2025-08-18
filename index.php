<?php 
    session_start(); 
    require_once "./app/settings/params/connect"; 
    require_once "./public/_header.php";
    require_once file_exists($link='./public/'.(isset($_GET['page'])?$_GET['page']:'home').'.php')?$link:"./public/_middle.php";
    require_once "./public/_footer.php";