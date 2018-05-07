<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 25/04/2018
 * Time: 21:35
 *
 *
 *
 *
 * VP2 – PHP
Opdrachten les 7: Error Handling en Debugging, Datum tijd notaties en de webkalender
Opdracht 7.1
Schrijf een php programma waarin de werking van de volgende functies duidelijk naar voren komt:
time()
mktime()
setlocale()
date()
strftime()

Opdracht 7.2
Bouw de webkalender zoals getoond in de sheets behorende bij deze les.
Volg hiervoor de stappen zoals aangegeven in de sheets.
Zorg ervoor dat je applicatie in verschillende onderdelen wordt getest. Waardoor je zeker weet dat genoemde functionaliteit werkt.
Maak zelf een css voor de opmaak van de kalender.
Uitwerking opdracht 7.1
Altijd goed!,  als alle functies een keer zijn toegepast, het gaat  hier om te snappen wat de verschillende functies doen en hoe toe te passen.

Uitwerking opdracht 7.2

Kalender.php

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head><title>PHP Kalender</title>
<link rel="stylesheet" type="text/css" href="kalender.css" />
</head>
<body>
<?php


/* zet de locale op Dutch */
$loc_nl = setlocale(LC_TIME, 'nl_NL', 'nl', 'du');
//echo "<br/>Voorkeurslocale voor Nederlands is op dit systeem: '$loc_nl' <br/>";

if (isset ($_POST['hmaand'])) {
    $maand = $_POST['hmaand'];
    $jaar = $_POST['hjaar'];
} else {
    $maand = idate('m');
    $jaar = idate('Y');
}
if (isset ($_POST['volgende'])) {
    $maand ++;
    if ($maand == 13) {
        $maand = 1;
        $jaar ++;
    }
}
if (isset ($_POST['vorige'])) {
    $maand --;
    if ($maand == 0) {
        $maand = 12;
        $jaar --;
    }
}

$datum = strftime("%B %Y", mktime(0, 0, 0, $maand, 1, $jaar));

$srv = $_SERVER['PHP_SELF'];
echo<<<EOD
  <br/>
  <div class="totcal">
  <div class="topnav">
  <form action="$srv" method="post">
  <table width="100%">
  <tr><td>
  <input type="submit" name="vorige" value="<<" />
  </td><td width = "60%"> $datum </td><td>
  <input type="submit" name="volgende" value=">>" />
  </td></tr>
  </table>
  <input type="hidden" name="hmaand" value="$maand"/>
  <input type="hidden" name="hjaar" value="$jaar"/>
  </form>
  </div>
  <div class="kalender">
EOD;

printMaand($maand, $jaar);
echo<<<EOD
</div>
</div>
</body>
</html>
EOD;

/*
 * print een kalender van de ingevoerde maand en jaar
 */
function printMaand($maand, $jaar) {
    //  $weekdag = array ('zo', 'ma', 'di', 'wo', 'do', 'vr', 'za');
    for ($i = 0; $i < 7; $i ++) {
        $weekdag[] = strftime("%a ", mktime(0, 0, 0, 6, $i +5, 2005));
    }

    $edag = eersteDagInMaand($maand, $jaar);
    $ldag = dagenInMaand($maand, $jaar);
    $rest = restDagen($edag, $ldag);
    echo '<br/>';

    echo "\n", '<table><tr>';
    foreach ($weekdag as $dag) {
        echo "<td class='wday'>$dag</td>";
    }
    echo '</tr><tr>', "\n";
    for ($i = 0; $i < ($edag + $ldag + $rest); $i ++) {
        if ($i < $edag || $i >= $edag + $ldag)
            echo '<td>&nbsp;</td>', "\n";
        else {
            echo '<td>', $i - $edag +1, '</td>', "\n";
            if (($i +1) % 7 == 0)
                echo '</tr><tr>', "\n";
        }
    }
    echo '</tr></table>';
}

function dagenInMaand($m, $y) {
//berekent aantal dagen in een maand, zie ook sheets blok 7
    $laatste = mktime(0, 0, 0, $m, 1, $y);
    $lday = idate('t', $laatste);
    return $lday;
}

function eersteDagInMaand($m, $y) {
//berekent de eerste dag in de maand, zie ook sheets blok 7
    $eerste = mktime(0, 0, 0, $m, 1, $y);
    $eday = idate('w', $eerste);
    return $eday;
}

function restDagen($edag, $ldag) {
//berekent aantal restdagen in een maand, zie ook sheets blok 7
    $mm = ($edag + $ldag) % 7;
    if ($mm != 0)
        $mm = 7 - $mm;
    return $mm;
}
?>

Kalender.css

body {background-color: white; text-align: center; }
input { font-family: "Verdana"; font-style: bold; font-size: 15px}

div.kalender table {
text-align: center; margin-left: auto; margin-right: auto;
border-style: solid; border-width: 1px; padding: 10px;}

div.kalender {
width: 300px;  text-align: center;
}

div.totcal {
width: 300px;  border-style: solid; border-width: 1px; padding: 10px; text-align: center;
}

div.topnav table {
text-align: center; margin-left: auto; margin-right: auto;
padding: 10px;}

div.topnav {
width: 400px;
padding: 10px; font-size: 25px;
text-align: center;
margin-left: auto; margin-right: auto;
}


.wday {
font-size: 20px;
font-style: bold;
background-color: #ececf1;
padding-left: 20px;
padding-right: 20px;
}

*/