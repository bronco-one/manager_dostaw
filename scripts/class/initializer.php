<?php 
class initializer {
    public static function initialize(){
        set_include_path(get_include_path().PATH_SEPARATOR."scripts/class");
        set_include_path(get_include_path().PATH_SEPARATOR."scripts/modules");
        set_include_path(get_include_path().PATH_SEPARATOR."scripts/bd");
    }
}

