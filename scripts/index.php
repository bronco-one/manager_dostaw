<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once 'lib/config.php';

function my_autoload($class) {
	include(LIBRARY.$class.'.php');

}
spl_autoload_register('my_autoload');

$app = new Bootstrap();
