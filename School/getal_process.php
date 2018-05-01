<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Het antwoord is </title>
</head>
<body>

Hello <?php echo $_GET['name']; ?> op dit pagina wordt het antwoord weergeven! <br>
<?php
$getal1 = $_GET['getal1'];
$getal2 = $_GET['getal2'];
$uitkomst = $getal1 + $getal2;

echo $getal1 . " + " . $getal2 . " = " . $uitkomst; ?>

</body>
</html>




