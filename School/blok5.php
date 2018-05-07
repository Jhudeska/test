<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- 5.1-->
<?php

//functie berekent lengte schuine zijde van een driehoek adhv 2 waarden.
function pythagoras($a, $b) {
    $result = ($a*$a) + ($b*$b);
    $result = sqrt($result);
    return $result;
}

//variabele zijde1
$zijde1 = 3;

//variabele zijde2
$zijde2 = 4;

//aanroep functie pythagoras met twee parameters
$schuinezijde = pythagoras($zijde1, $zijde2);

//resultaten weergeven op scherm
echo "zijde 1 = $zijde1<br>";
echo "zijde 2 = $zijde2<br>";
echo "schuinezijde = $schuinezijde";

?>
















Oefeningen Blok 5

Opdracht 5-1

Schrijf in php een functie die van een driehoek de lengte van een schuine zijde berekent en de uikomst op het scherm toont.
Pythagoras : (a*a) + (b*b) = (c*c)

Opdracht 5-2

Schrijf in php een functie die twee strings aan elkaar plakt in volgorde van lengte. Bij gelijke lengte een melding hiervan genereren.
Voorbeeld:
String1 abc
String2 ab
Resultaat -> ababc

Opdracht 5-3

Schrijf een programma waarin een array wordt aangemaakt met 10 persoonsnamen en hun leeftijden.
Toon de namen en leeftijden op het scherm.

Opdracht 5-4

Schrijf een programma waarin twee arrays worden aangemaakt. In array 1 staan namen en array 2 staan leeftijden.  Voeg deze twee arrays  samen in een tweedimensionale array.
Toon alle namen op het scherm en toon hierbij een leeftijd uit het andere array van dezelfde positie.

Voor de  liefhebber Opdracht 5-5 (is dus niet verplicht)

Schrijf een programma waarin een array van 20 getallen wordt aangemaakt, het array vervolgens sorteert en het gesorteerde resultaat toont op het scherm. Volg hierbij de volgende stappen:
Loop door de te sorteren rij van n elementen en vergelijk elk element met het volgende Verwissel beide als ze in de verkeerde volgorde staan Schuif dan een stapje op
Loop opnieuw door de rij maar ga nu door tot het voorlaatste element omdat het laatste element het grootste in de rij was
Nog een keer maar negeer dan de twee laatste elementen.
Ga zo door
n Nog een keer maar negeer dan de laatste n-1 getallen
n+1 Klaar












Antwoorden Blok 5

Oefening 5-1

<?php

//functie berekent lengte schuine zijde van een driehoek adhv 2 waarden.
function pythagoras($a, $b) {
    $result = ($a*$a) + ($b*$b);
    $result = sqrt($result);
    return $result;
}

//variabele zijde1
$zijde1 = 3;

//variabele zijde2
$zijde2 = 4;

//aanroep functie pythagoras met twee parameters
$schuinezijde = pythagoras($zijde1, $zijde2);

//resultaten weergeven op scherm
echo "zijde 1 = $zijde1<br>";
echo "zijde 2 = $zijde2<br>";
echo "schuinezijde = $schuinezijde";

?>

Oefening 5-2

<?php

//bepalen lengte van twee parameters op resultaat is 1 string
//waarbij a en b zijn samengevoegd.
//langste string vooraan.
function concats($a, $b) {

    if ( strlen($a) > strlen($b) ) {
        $result = $a . $b ;
        return $result;
    }
    else if ( strlen($b) > strlen($a) ) {
        $result = $b . $a;
        return $result;
    }
    else {
        echo "lengtes string a en string b zijn gelijk";
    }

}

$string1 = "Haperen";
$string2 = "van";

//aanroep functie concats met twee strings;
$totaal = concats($string1, $string2);

echo "$totaal";

?>

Oefening 5-3

<?php

$personen = array("William" => 35, "Maurice" => 37, "Gerard" => 42, "Tolja" => 27, "willem" => 21, "Mattijs" => 29, "Hein" => 63, "Patrick" => 42, "Paul" => 29, "Tom" => 21);

print_r($personen);

?>

Oefening 5-4

<?php

$namen = array(1 => "William", "Maurice", "Gerard", "Tolja", "William", "Mattijs", "Hein", "Patrick", "Paul", "Tom");

$leeftijden = array(1 => 35, 37, 42, 27, 21, 29, 63, 42, 29, 21);

$persoon['namen'] = $namen;
$persoon['leeftijden'] = $leeftijden;

for($i=1;$i<=10;$i++) {
    echo '<br/>', $persoon['namen'][$i], $persoon['leeftijden'][$i];
}

?>

Oefening 5-5

<?php

// 1 Loop door de te sorteren rij van n elementen en vergelijk elk element //met het volgende Verwissel beide als ze in de verkeerde volgorde staan //Schuif dan een stapje op
// 2 Loop opnieuw door de rij maar ga nu door tot het voorlaatste element //omdat het laatste element het grootste in de rij was
// 3 Nog een keer maar negeer dan de twee laatste elementen.
// 4 Ga zo door
// n Nog een keer maar negeer dan de laatste n-1 getallen
// n+1 Klaar


$v = true;
$Arr = array (31,56,8,211,12,13,5,4,3,2,-1,0,34,20,12,8,7,3,2,2,123,56);
$Count = count ($Arr) - 1;
for ($i = 0; ($i < $Count) && ($v == True); $i++)
{
    $v = false;
    for ($j = 0; $j < ($Count - $i); $j++)
    {
        if ($Arr[$j] > $Arr[$j + 1])
        {
            $Temp = $Arr[$j];
            $Arr[$j] = $Arr[$j + 1];
            $Arr[$j + 1] = $Temp;
            $v = true;
        }
    }
}
print_r ($Arr);
?>
</body>
</html>


