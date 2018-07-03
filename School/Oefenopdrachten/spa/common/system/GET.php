<?php

class GET {

    function __construct() {
        // defined to avoid method get() to be seen as constructor
    }

    static function get($key, $default = '') {
        $value = filter_input(INPUT_GET, $key);
        if ($value === false || $value === null) {
            $value = '';
        }
        if ($value == '') {
            $value = $default;
        }
        return trim($value);
    }

}



