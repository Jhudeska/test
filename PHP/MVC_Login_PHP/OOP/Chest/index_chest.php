<!--
//version1
require 'Chest.php';
require 'Lock.php';

$chest = new Chest( new Lock);
$chest->close( true/ false);

// version2
require 'Chest.php';
require 'Lock.php';

$chest = new Chest( new Lock);
$chest->close();
$chest->open();

//Dependency Injection
$chest = new Chest(Lock $lock );
-->
<?php

require 'Chest.php';
require 'Lock.php';

$chest = new Chest('test' );
$chest->close();
$chest->open();
