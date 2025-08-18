<?php 
    $page = (isset($_GET['page']) && $_GET['page']) ? './pages/'.str_replace('--', '.',$_GET['page']) : '../errors/admin/pages/errors/404';
    die(require_once $page);
?>