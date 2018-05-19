<?php

class Session {
    static function init() {
        session_start();
    }

    /**
     * get a session value
     *
     * @param string $key       the key of the wanted value
     * @param string $default   the default value to return if not set
     * @return string           the wanted value, or null
     */
    static function get($key, $default = null) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return $default;
        }
    }

    static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    static function clear() {
        session_destroy();
    }
}

Session::init();

