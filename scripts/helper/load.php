<?php 
set_include_path(get_include_path().PATH_SEPARATOR."scripts/modules");

function __autoload($object) {
    require_once("{$object}.php");
    
}

