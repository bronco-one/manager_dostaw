<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once 'lib/Config.php';
require_once 'lib/Loader.php';


$loader = new Loader();

$app = new Bootstrap();
