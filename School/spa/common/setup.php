<?php
error_reporting(-1);
set_include_path('./' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . '../../' . PATH_SEPARATOR . '../../../');
session_start();
$__p = explode('/', $_SERVER['PHP_SELF']);
define('BASE', "{$__p[1]}");
define('APP', "{$__p[2]}");

