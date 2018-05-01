<html>

<head>
    <title>Oefening 3.3</title>
</head>

<body>

<?php

echo "De vertaling van " . $_POST[Getal] . " is: ";
switch ( $_POST[Getal] ) {
    case 1:	echo "zeer slecht." ;
        break ;
    case 2:	echo "slecht." ;
        break ;
    case 3:	echo "matig" ;
        break ;
    case 4:	echo "ruim onvoldoende" ;
        break ;
    case 5:	echo "onvoldoende" ;
        break ;
    case 6:	echo "voldoende" ;
        break ;
    case 7:	echo "ruim voldoende" ;
        break ;
    case 8:	echo "goed." ;
        break ;
    case 9:	echo "zeer goed." ;
        break ;
    case 10:	echo "uitmuntend." ;
        break ;
    default:	echo "onbekend; voer een getal van 0 .. 10 in" ;
        break ;
}

?>



<?php

if  ( ( $_POST[Getal] > 0 ) AND ( $_POST[Getal] <= 9 ) )
    echo "1" ;
else if ( ( $_POST[Getal] >= 10 ) AND ( $_POST[Getal] <= 99 ) )
    echo "2" ;
else if ( ( $_POST[Getal] >= 100 ) AND ( $_POST[Getal] <= 999 ) )
    echo "3" ;
else if ( ( $_POST[Getal] >= 1000 ) AND ( $_POST[Getal] <= 9999 ) )
    echo "4" ;
else if ( ( $_POST[Getal] >= 10000 ) AND ( $_POST[Getal] <= 99999 ) )
    echo "5" ;
else if ( ( $_POST[Getal] >= 100000 ) AND ( $_POST[Getal] <= 999099 ) )
    echo "6" ;
else echo "Dit is onbekende invoer." ;

?>



<br/><br/>
<a href="blok3.php">Terug</a>
</body>
</html>