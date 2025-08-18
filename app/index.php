<?php session_start();
$DS = DIRECTORY_SEPARATOR;
$ROOT = __DIR__ . $DS . 'admin' . $DS;
require_once 'settings' . DIRECTORY_SEPARATOR . 'params' . DIRECTORY_SEPARATOR . 'connect';
require_once 'config.php';
require_once 'admin' . DS . 'root';
