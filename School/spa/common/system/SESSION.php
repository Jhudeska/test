<?php


class SESSION {

    static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    static function clear($key = null) {
        if ($key == null) {
            session_unset();
        } else {
            unset($_SESSION[$key]);
        }
    }

    static function get($key, $default = '') {
        if (isset($_SESSION[$key])) {
            $value = $_SESSION[$key];
        } else {
            $value = $default;
        }
        return trim($value);
    }

    static function setFromFormIfSet($key) {
        $value = filter_input(INPUT_POST, $key);
        if ($value === false || $value === null) {
            $value = filter_input(INPUT_GET, $key);
        }
        if ($value !== false && $value !== null) {
            if ($value == '') {
                unset($_SESSION[$key]);
            } else {
                $_SESSION[$key] = $value;
            }
        }
    }

    static function setFromForm($key) {
        $value = filter_input(INPUT_POST, $key);
        if ($value === false || $value === null) {
            $value = filter_input(INPUT_GET, $key);
        }
        if ($value !== false && $value !== null) {
            if ($value == '') {
                unset($_SESSION[$key]);
            } else {
                $_SESSION[$key] = $value;
            }
        } else {
            unset($_SESSION[$key]);
        }
    }

}
