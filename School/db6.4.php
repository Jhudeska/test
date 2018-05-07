<?php

$link = mysqli_connect('localhost','root', 'root', 'world') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
else print "Verbinding is gelukt!";

// Leg verbinding met database world

$dbresultaat = mysqli_select_db( $link,'world');
if ( ! $dbresultaat )
    exit("Database is niet gevonden.") ;
else print "Database is gevonden!" ;

$sql = "INSERT INTO CITY VALUES (". $_POST["IDInvoer"] . ", \"" . $_POST["NameInvoer"] . "\", \"". $_POST["CCInvoer"] . "\", \"". $_POST["DistrictInvoer"] . "\", ". $_POST["PopInvoer"] . ") ; " ;
$result = mysqli_query($link, $sql) ;

echo "city ingevoerd";


?>
        
