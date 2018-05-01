
<!--/*--><?php
/*
function teller() {
$filename = "teller.txt";

if (file_exists($filename)) {
$handle = fopen($filename, "rb+");
$teller = fread($handle, filesize($filename));
$teller ++;
} else {
$handle = fopen($filename, "wb+");
$teller = 1;<
}
rewind($handle);
fwrite($handle, $teller);
fclose($handle);
return sprintf("%06d", $teller);
}
*/?><!--

strrev () functie voor string  reverse-->


<?php
$filename = "resource.txt";
$handle = fopen("/resource.txt", "r");

?>