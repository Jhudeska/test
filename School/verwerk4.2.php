<html>

<head>
    <title>Oefening 4.2</title>
</head>

<body>

<?php

$BeginBedrag = $_POST[BeginBedrag] ;
$EindBedrag = $_POST[EindBedrag] ;
$Rente = $_POST[Rente] ;
$Jaar = 0 ;

while ( $BeginBedrag < $EindBedrag ) {
    $BeginBedrag = $BeginBedrag + ( $Rente / 100 ) * $BeginBedrag ;
    $Jaar = $Jaar + 1 ;
}
echo "Na $Jaar jaar is het beginbedrag aangegroeid tot $BeginBedrag" ;

?>

<a href="blok4.php">Terug</a>

</body>
</html>