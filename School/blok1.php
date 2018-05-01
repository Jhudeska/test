<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 25/04/2018
 * Time: 21:28
 */


//Blok1 Opdracht 1.1

echo nl2br("Hello World.\n");
print nl2br(" Hello mijn naam is Jhudeska \n\n\n\n");


//Blok1 Opdracht 1.2
echo "Voorbeeld:". "<br>\r\n";
print "Jhudeska Ignacia". "<br>\r\n";
echo nl2br("Banckertstraat 28\n");
echo nl2br("3317AE Dordrecht\n\n\n\n");

echo '<br/>',  'Decha Ignacia';
echo '<br/>',  'Strijpenlaan 13';
echo '<br/>',  '4847 AV  Teteringen';
?>





<!-- //Blok1 Opdracht 1.4
// Formulier van naam gemaakt in css -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display name on screen with HTML and CSS. </title>
    <!-- Blok1 Opdracht 1.3-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<br>
<form method="post" action="">
    <fieldset>
        <legend>HTML Formulier</legend>
        <label for="naam">Naam:</label>
        <input id="naam" name="naam" /><br />

        <label for="adres">Adres:</label>
        <input id="adres" name="adres" /><br />

        <label for="postcode">Postcode:</label>
        <input id="postcode" name="postcode" /><br />

        <label>Stad:</label>
        <select>
            <option>Amsterdam</option>
            <option>Breda</option>
            <option>Capelle aan den Ijssel</option>
            <option>Dordrecht</option>
            <option>Rotterdam</option>
        </select><br /><br />

        <label>&nbsp;</label>
        <input type="button" value="opslaan" />&nbsp;<input type="reset" value="reset" />
    </fieldset>
</form>


<div class="opmaaknaam">
    <p>Maurice van Haperen</p>
</div>
<div class="opmaakadres">
    <p>Strijpenlaan 13</p>
</div>
<div class="opmaakpwp">
    <p>4847 AV Teteringen</p>
</div>

<!--//Blok1 Opdracht 1.5 -->
<br><br>
Errors from Validator

<img src="images/validator.png" alt="Errors from Validator">


</body>
</html>





