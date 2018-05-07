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
<!-- Oefening 4.1-->


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

</body>
</html>

