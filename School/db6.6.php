<?php

$link = mysqli_connect('localhost','root', 'root', 'world') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
else print "Verbinding is gelukt!";

$sql1 = "SELECT IsOfficial FROM COUNTRYLANGUAGE WHERE CountryCode =\"". $_POST["LandInvoer"] . "\" AND Language = \"" . $_POST["TaalInvoer"] . "\" ;" ;
$result = mysqli_query($sql1) ;

while ( $line = mysqli_fetch_row($result) ) {
    foreach ( $line as $col_value ) {
        $officieel = $col_value ;
    }
}
if ( $officieel == "F") {
    $sql2 = "DELETE FROM COUNTRYLANGUAGE WHERE CountryCode =\"". $_POST["LandInvoer"] . "\" AND Language = \"" . $_POST["TaalInvoer"] . "\" ;" ;
    $result = mysqli_query($sql2) ;
}

?>