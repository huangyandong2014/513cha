<?php
    define('APP_DEBUG', TRUE);
    
    define('APP_PATH', './app/');
    define('THINK_PATH', realpath('./system').'/');
    define('RUNTIME_PATH', './runtime/');
    
    require_once THINK_PATH . 'ThinkPHP.php';
?>