<?php

/* Leg verbinding met de server:
	servernaam is localhost,
	username is root
*/

$link = mysqli_connect('localhost','root', 'root', 'world') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
else print "Verbinding is gelukt!";

// Leg verbinding met database world

$dbresultaat = mysqli_select_db( $link,'world');
if ( ! $dbresultaat )
    exit("Database is niet gevonden.") ;
else print "Database is gevonden!" ;

// Definieer query en voer uit

$sql = "SELECT DISTINCT Continent FROM COUNTRY;" ;
$result = mysqli_query($link,$sql) ;

/*	Loop de resultaten langs
	en print ze in een tabel
*/

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