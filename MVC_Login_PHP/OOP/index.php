<!--

?php

class {

}

-->

<!--
-->

<?php
// Report all PHP errors
error_reporting(E_ALL);

require 'Database.php';
require  'User.php';

$user = new User(new Database);
$user->create(['username' =>'Terry']);


