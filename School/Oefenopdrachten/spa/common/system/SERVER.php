<?php

class SERVER {

    static function get($key) {
        return filter_input(INPUT_SERVER, $key);
    }

}
