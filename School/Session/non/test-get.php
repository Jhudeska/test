<?php

require_once 'Session.php';

$session = new Session();

$name = $session->get('name');



echo $name;
