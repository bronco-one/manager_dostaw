<?php

abstract class Model {

    protected $db;

    public function __construct($db = NULL) {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            $this->db = new Database(DB_VENDOR, DB_HOST, DB_NAME, DB_USR, DB_PWD);
            $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');
        }
    }

}
