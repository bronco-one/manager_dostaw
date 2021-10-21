<?php
class Loader{

    public function __construct() {
          spl_autoload_register(array($this, 'loader'));
      }
    private function loader($class)
    {
        include(LIBRARY.$class.'.php');
    }
}
