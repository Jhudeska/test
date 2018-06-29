<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 27/06/2018
 * Time: 15:25
 */

$dbhost     =   'localhost';
$dbname     =   'chat';
$dbuser     =   'root';
$dbpass     =   'root';

try{
    $db = new PDO("mysql:dbhost=$dhhost;dbname=$dbname", "$dbuser, $dbpass");
}catch(PDOException $e){
    echo $e->getMessage();
}
?>

