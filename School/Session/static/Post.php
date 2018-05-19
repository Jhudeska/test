<?php

class Post
{

    /**
     * ...
     * @param type $key
     * @param type $filter
     * @param type $options
     * @return type
     */
    function get($key, $default = null, $filter = FILTER_DEFAULT, $options = null)
    {

        $value = filter_input(INPUT_POST, $key, $filter);
        if ($value === FALSE) {
            return $default;
        }
        return $value;


    }
}
