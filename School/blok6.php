<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Oefening 6.1 -->
<?php
/* Leg verbinding met de server:
	servernaam is localhost,
	username is root
*/

include 'db.php';

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

<br><br>
<!-- Oefening 6.2-->
<form action=db6.2.php method="post">

    Stad: <input type="text" name="StadInvoer"/>
    <br/><br/>

    <input type="submit" name="submit" value="Vind landcode"/>
</form>

    <br><br> <br><br>
    <!-- Oefening 6.3-->
    <form action=db6.3.php method="post">

        Stad: <input type="text" name="StadInvoer"/>
        <br/><br/>

        <input type="submit" name="submit" value="Vind land"/>

    </form>


    <br><br>
    <!-- Oefening 6.4-->
    <form action=db6.4.php method="post">

        ID: <input type="text" name="IDInvoer"/>
        <br/>
        Name: <input type="text" name="NameInvoer"/>
        <br/>
        Country Code: <input type="text" name="CCInvoer"/>
        <br/>
        District: <input type="text" name="DistrictInvoer"/>
        <br/>
        Population: <input type="text" name="PopInvoer"/>
        <br/><br/>
        <input type="submit" name="submit" value="Insert"/>

    </form>


    <br/><br/>
    <!-- Oefening 6.5-->
    <form action=db6.5.php method="post">

        ID: <input type="text" name="IDInvoer" value=<?php echo $hoogsteId ?> readonly/>
        <br/>
        Name: <input type="text" name="NameInvoer"/>
        <br/>
        Country Code: <input type="text" name="CCInvoer"/>
        <br/>
        District: <input type="text" name="DistrictInvoer"/>
        <br/>
        Population: <input type="text" name="PopInvoer"/>
        <br/><br/>
        <input type="submit" name="submit" value="Insert"/>

    </form>

<br><br>
<!-- Oefening 6.6-->
<form action=db6.6.php method="post">

    CountryCode: <input type="text" name="LandInvoer"/>
    <br/>
    Language: <input type="text" name="TaalInvoer"/>
    <br/>

    <input type="submit" name="submit" value="Delete"/>

</form>

</body>
</html>





Oefeningen Blok 6

De in de oefeningen gebruikte database World kan worden aangemaakt door middel van het script World.sql. Dit script is te vinden onder het onderwijsmateriaal onder Bronnen.

Oefening 6.1

Combineer de PHP-codefragmenten uit de sheets in één werkend PHP-programma.

Oefening 6.2

Schrijf een PHP-programma dat bij invoer van (de naam van) een stad de bijbehorende landcode toont.

Oefening 6.3

Schrijf een PHP-programma dat bij invoer van (de naam van) een stad de naam van het bijbehorende land toont.

Oefening 6.4

Maak een formulier en een PHP-programma waarmee een nieuwe stad in de database ingevoerd kan worden.

Oefening 6.5
Pas het programma van oefening 6.4 zo aan dat de ID van een stad automatisch met een passende waarde wordt ingevuld. Tip 1: Een passende waarde is net 1 hoger dan de hoogst aanwezige ID. Tip 2: Hoe haal je ook al weer de hoogste waarde uit een kolom?


Oefening 6-6

Maak een formulier waarin landcode en taal opgegeven kunnen worden. Schrijf dan een PHP-programma waarmee die taal / dat land uit de database verwijderd worden. Zorg er daarbij wel dat dit niet gebeurd als die taal een officiële taal van het land is.
