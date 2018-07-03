<?php
$dbhost     =   "127.0.0.1";
$dbname     =   "chat";
$dbuser     =   "root";
$dbpass     =   "root";

try {
    $db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname;", "$dbuser", "$dbpass");

} catch (PDOException $e) {
    echo "Caught exception : ", $e->getMessage();
}




