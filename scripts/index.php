<?php 
error_reporting(e_all);
ini_set('display_errors',1);

require_once 'lib/Config.php';

function __autoload($class) {
	require LIBRARY.$class.'.php';
	
}

$app = new Bootstrap();

