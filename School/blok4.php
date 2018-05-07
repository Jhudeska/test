<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 25/04/2018
 * Time: 21:31
 */ ?>

<!DOCTYPE html>
<html>
<head>
    <title>Oefening 4 </title>
</head>
<body>



<!-- Oefening 4.1

 Schrijf een PHP-programma om de tafel van 29 af te drukken. Teken eerst een activity diagram.

 De uitvoer heeft de vorm:
 1 x 29 = 29
 2 x 29 = 58
 …
 9 x 29 = 261
 10x 29 = 290
-->
<?php
for ($i = 1; $i <= 10; $i++ ){
   echo "$i X 29 = ";
   echo 29 * $i;
   echo "<br/>";
}
?>

<br><br>
<!-- Oefening 4.2-->
<form action=Verwerk4.2.php method="post">

    Beginbedrag: <input type="text" name="BeginBedrag"/>
    <br/>
    Eindbedrag: <input type="text" name="EindBedrag"/>
    <br/>
    Rente: <input type="text" name="Rente"/>
    <br/><br/>

    <input type="submit" name="submit" value="Bereken"/>

</form>


<br><br>
<!-- Oefening 4.3-->
<?php

$AfstandA = 0 ;
$AfstandB = 0 ;
$Verschil = $AfstandB - $AfstandA + 6 ;
$TempoA = 20 ;
$TempoB = 16 ;
$t = 1 ;

while ( $Verschil > 0 ) {
    $AfstandA = $AfstandA + ( $TempoA / 4 ) ;
    $AfstandB = $AfstandB + ( $TempoB / 4 ) ;
    $Verschil = $AfstandB - $AfstandA + 6 ;
    echo "Tijd is $t kwartier; A heeft $AfstandA km. afgelegd en B $AfstandB km.<br/>" ;
    echo "Het verschil tussen A en B is nog $Verschil km.<br/><br/>";
    $t = $t + 1 ;
}
echo "A heeft B ingehaald." ;

?>




<br><br>
<!-- Oefening 4.4-->

<form action=Verwerk4.4.php method="post">

    Hoeveel getallen?: <input type="text" name="AantalGetallen"/>
    <br/><br/>

    <input type="submit" name="submit" value="Bereken"/>

</form>
</body>
</html>

