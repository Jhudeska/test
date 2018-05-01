<?php

$connection = mysqli_connect('localhost','root', 'root', 'cms');





/* // First way to connect to an database
$connection = mysqli_connect('localhost','root', 'root', 'cms');
if ($connection){
    echo  "We are connected";
}

$db_host = 'root';
$db_user = 'localhost';
$db_name = 'cms';


<?php

// second way to  connect to an database (array)
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASS', 'DB_NAME');
if ($connection) {
    echo "We are connected";
} else{
    echo "Connection was not established";
}
$query = "SET NAMES utf8";
mysqli_query($connection,$query);

*/
?>