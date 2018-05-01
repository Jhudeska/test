<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/*echo  "hello ";

$naam = 'Henk';
echo 'Dit is $naam\n';

$naam="Henk";
echo "Dit is $naam \n;"

// getallen optellen .+-/%
// http://php.net/manual/en/index.php
$getal = 2;
$som = $getal + 3;
echo $som;


// $a == $b --> gelijk
//
if ($a > $b)
    echo 'Het 1ste getal is groter dan het 2e';

*/ echo 'Hello World';

$naam = 'Jhudeska Ignacia';
$adres ='Banckertstraat';
$huisnr = 28;
$postcode = '3317AE';
$stad = 'Dodrecht';
?>

<form action="/" method="post">
    <label>Naam
        <input type="text" name="naam">
    </label>

    <label>Adres
        <input type="text" name="adres">
    </label>
    <label>Huisnummer
        <input type="text" name="huisnr">
    </label>
    <label>Postcode
        <input type="text" name="postcode">
    </label>
    <label>Stad
        <input type="text" name="stad">
    </label>
    <button type="submit">Check!</button>
</form>


<form action="voorbeeld-5-formulier.php" method="post">
    <label> Getal
    <input type="text" name="number">
    </label>
    <button type="submit">Check!</button>
</form>





</body>
</html>
