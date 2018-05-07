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

$sql = "SELECT Country.Name FROM City, Country WHERE City.Name = \"". $_POST["StadInvoer"] . "\" AND City.CountryCode = Country.Code ;" ;
$result = mysqli_query($link, $sql) ;

print "<table border='1'>\n" ;
while ( $line = mysqli_fetch_row($result) ) {
    print "\t<tr>\n" ;
    foreach ( $line as $col_value ) {
        print "\t\t<td>$col_value</td\n" ;
    }
    print "\t</tr>\n" ;
}
print "</table>\n" ;

?>