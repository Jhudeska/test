<?php

$f1 = 0 ;
$f2 = 1 ;
for ( $i = 3 ; $i <= $_POST[AantalGetallen] ; $i++ ) {
    $f3 = $f1 + $f2 ;
    $f1 = $f2 ;
    $f2 = $f3 ;
}
echo "Fibonacci-getal nummer $_POST[AantalGetallen] is $f3" ;

?>

<a href="blok4.php">Terug</a>
