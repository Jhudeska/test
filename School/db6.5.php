<?php

$link = mysqli_connect('localhost','root', 'root', 'world') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
else print "Verbinding is gelukt!";

$sql1 = "SELECT Max(ID) FROM City ;" ;
$result = mysqli_query($link, $sql1) ;

while ( $line = mysqli_fetch_row($result) ) {
    foreach ( $line as $col_value ) {
        $hoogsteId = $col_value ;
    }
}
$hoogsteId = $hoogsteId + 1 ;


$sql2 = "INSERT INTO CITY VALUES (". $hoogsteId . ", \"" . $_POST["NameInvoer"] . "\", \"". $_POST["CCInvoer"] . "\", \"". $_POST["DistrictInvoer"] . "\", ". $_POST["PopInvoer"] . ") ; " ;
$result = mysqli_query($sql2) ;

?>
