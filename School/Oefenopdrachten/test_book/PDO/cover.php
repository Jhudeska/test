<?php
/**
 * Blob
 * Alternative way, we can generate ‘virtual’ file on the fly. Create a file named “cover.php” with this code:
 */


// configuration

$dbhost        = "localhost";
$dbname        = "test2";
$dbuser        = "root";
$dbpass        = "root";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query
$sql = "SELECT cover FROM books2 WHERE id= 4";
//$sql = "SELECT cover FROM books2 WHERE id=".$_GET['id'];

$q = $conn->prepare($sql);
$q->execute();
$q->bindColumn(4, $cover, PDO::PARAM_LOB);
$q->fetch(PDO::FETCH_BOUND);
header("content-type: image/png");

echo $cover ['image'];

?>
