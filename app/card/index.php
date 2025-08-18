<?php
    $_SESSION['GUEST'] = $_SESSION['GUEST'] ?? []; $_SESSION['GUEST']['registration'] = $_SESSION['GUEST']['registration'] ?? [];
    $DS = DIRECTORY_SEPARATOR;
    $ROOT = dirname(__DIR__) . $DS . 'admin' . $DS;;
    require_once dirname(__DIR__) . $DS . 'settings' . $DS . 'params' . $DS . 'connect';

    if(isset($_GET['dataGetScript'], $_GET['script']) && $_GET['dataGetScript'] == 'OUTER_MCISME_ENTER' ){
        $links = ['student', 'add'];
        require_once $FLink = "{$ROOT}scripts{$DS}$links[0]{$DS}$links[1].bin" ;
    } else {
        ob_start();

        $links = ['student', isset($_GET['registrations']) ? 'registrations' : 'guest'];

        require_once $FLink = "{$ROOT}pages{$DS}$links[0]{$DS}$links[1].bin" ;
        $content = (object) array('page' => minify_output(ob_get_clean()), 'title' => isset($pageTitle) && $pageTitle ? $pageTitle : "Page Title", 'links' => $links) ;
        if(isset($_POST['dynamicLink']) && $_POST['dynamicLink'] == 'dynamicLink' || isset($_GET['dynamicLink']) && $_GET['dynamicLink'] == 'dynamicLink') echo json_encode($content);
        else require_once $_SERVER['DOCUMENT_ROOT']."{$DS}layouts{$DS}".(isset($_GET['theme'])?$_GET['theme']:'default')."{$DS}guest.bin";
    }
    
