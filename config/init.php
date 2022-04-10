<?php 
// Config file
require_once 'config.php';
// Autoloader
function my_autoloader($class_name) {
    require_once 'lib/'.$class_name.'.class.php';
}
spl_autoload_register('my_autoloader');