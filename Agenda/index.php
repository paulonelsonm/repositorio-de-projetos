<?php
    
    error_reporting(E_ERROR | E_STRICT);
    //error_reporting(E_ALL);
    
    
    define('ROOT', dirname(__FILE__));
    define('DS',DIRECTORY_SEPARATOR);
    define('APP', ROOT . DS . 'app');
    define('LIBS', ROOT . DS . 'libs');
    define('CONFIG', ROOT . DS . 'configure');
    
    define('IMG', APP . DS . 'files' . DS . 'img');
    define('CSS', APP . DS . 'files' . DS . 'css');
    define('JS', APP . DS . 'files' . DS . 'js');
    define('FILES', APP . DS . 'files' . DS . 'files');
    include_once LIBS . DS . 'autoload.php';
    include_once APP  . DS . 'index.php';
    
?>