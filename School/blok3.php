<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 25/04/2018
 * Time: 21:31
 */


//Oefening 3.1
/*Pas het PHP-programma van oefening 2.5 zodanig aan dat de variabelen $a en $b niet meer vast
in het programma opgenomen zijn, maar via 2 invoervelden ingelezen worden.*/

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening Blok 3</title>
</head>
<body>
<br><br>

<form method="get" action="getal_process.php">
<fieldset>
    <br>
    <legend> Optellen / Sum</legend>

    <label for="name">Naam :</label><br>
    <input name="name" type="text"/>
    <br><br>

    <label for="getal1">Eerste getal :</label><br>
    <input name="getal1" type="number"/>
    <br><br>

    <label for="getal2">Tweede  getal :</label><br>
    <input id="getal2" name="getal2" type="number"/><br />
    <br>
    <?php
    if(isset($_GET['getal1']) && isset($_GET['getal2'])) {
        $getal1 = $_GET['getal1'];
        $getal2 = $_GET['getal2'];
        $uitkomst = $getal1 + $getal2;
    }
 ?>
    <br><br>
    <label>&nbsp;</label>
    <input type="submit" value="Check the sum" />&nbsp;<input type="reset" value="reset" />
</fieldset>
</form>


<!--Oefening 3.2
Teken een activity diagram voor de code van het switch-statement uit de sheets:-->
<br><br> <br>

<?php
$i = 1;
Switch ($i) {
    case 0:	echo "i is 0" ;
        break ;
    case 1:	echo "i is 1" ;
        break ;
    case 2:	echo "i is 2" ;
        break ;
    default:	echo "Deze i ken ik niet" ;
        break ;
}

?>

<!--Oefening 3.3-->
<form action=verwerk.php method="post">

    Getal: <input type="text" name="Getal"/>
    <br/><br/>
    <input type="submit" name="submit" value="Vertaal"/>

</form>

<!--Oefening 3.4-->

<form action=Verwerk.php method="post">

    Getal 1: <input type="text" name="Getal1"/>
    <br/><br/>
    Getal 2: <input type="text" name="Getal2"/>
    <br/><br/>
    Getal 3: <input type="text" name="Getal3"/>
    <br/><br/>
    <input type="submit" name="submit" value="Vertaal"/>

</form>
</body>
</html>

