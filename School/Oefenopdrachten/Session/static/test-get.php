<?php
require_once 'Session.php';

$name = Session::get('name');

echo $name;

