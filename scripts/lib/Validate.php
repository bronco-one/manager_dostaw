<?php

class Validate {

    public function __construct() {

    }

    public function formEmpty($param) {
        foreach ($param as $key => $value) {
            if (strlen($value) <= 0) {
                $error = true;
                break;
            } else {
                $error = false;
            }
        }
        return $error;
    }

    public function htmlTags($param) {
        foreach ($param as $key => $value) {
            $param[$key] = strip_tags($value);
        }
        return $param;
    }

    public function dataTrim($param) {
        foreach ($param as $key => $value) {
            $param[$key] = trim($value);
        }
        return $param;
    }

}
