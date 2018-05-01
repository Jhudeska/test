
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 25/04/2018
 * Time: 21:31
 */


<html>
<head>
    <title>Oefening 2.1</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<!--//Oefening 2.1 -->
<?php
    echo "<h2><font-family:courier>Dit is een paragraaftitel.</h2>";
    echo "<b><font-family:courier>Dit is vette tekst.</b><br><br><br>";
    // Change Font-style to "Courier" for those two sentence
?>

<!--//Oefening 2.2 -->

<b>Welke van de volgende variabelenamen zijn wel of niet toegestaan?<br> Geef bij niet toegestane namen aan, waarom deze dan niet juist zijn</b>.<br><br><br>
<span class="green">$AantalEnen</span> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )<br>
<span class="red">EnenAantal</span>  Does not contains the $ sign.<br>
<span class="red">$1Hoeveelheid</span> Cannot start with an number.<br>
<span class="green">$Hoeveelheid1</span><br>
<span class="green">$_1</span><br>
<span class="green">$_1_1</span><br>
<span class="red">$#Enen</span> # is not allowed<br>
<span class="red">$Enen!</span> ! is not allowed<br>


<!--//Oefening 2.3 -->
<br><br>
a) Welke speciale tekens (escape-waarden) zijn toegestaan in een dubbel-quoted string?<br>
'/'<br><br>
b)Geef de uitvoer van dit programma met en zonder het gebruik van \n. Verklaar de overeenkomsten c.q. verschillen. <br>
Alles wordt op een regel getoond zonder de /n teken.<br><br>

<?php

//Oefening 2.4
// Het gaat hier om de . operator
echo '$Naam = $Voornaam.$Achternaam<br>';

//Oefening 2.5

//Opdracht 1 optellen
$a = 1;
$b = 2;
$uitkomst = $a + $b;
echo $uitkomst;

//Opdracht 2 aftrekken met gehele en drijvende komma getallen
$a = 3.7;
$b = 9;
$uitkomst = $a - $b;
echo $uitkomst;

//Opdracht 3
echo 'Gebruik $uitkomst om het resultaat van optellen, aftrekken, vermenigvuldigen, delen en modulo van $a en $b te bepalen.<br>';

$a = 11;
$b = 11;
$uitkomst = $a * $b; //vermeningvuldigen
echo $uitkomst;


$a = 24;
$b = 6;
$uitkomst = $a / $b; // delen
echo $uitkomst;


$a = 741;
$b = 34;
$uitkomst = $a - $b; //Modulo
echo $uitkomst;
?>

</body>
</html>

