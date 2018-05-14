<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud systeem</title>
</head>


<body>

<!--<h2>Klant tabel</h2>

<table>
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
    </tr>
    <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
    </tr>
    <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
    </tr>
    <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
    </tr>
    <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
    </tr>
</table>-->
<!--
--><start /*//Refresh it everytime.
$Rows = 7; //Dynamic number for Rowss
$Cols = 3; // Dynamic number for Colsumns
echo '<table border="1">';
for($i=1; $i<=$Rows;$i++){ echo '<tr>';
    for($j=1;$j<=$Cols;$j++){ echo '<td>' . mt_rand($i, $i*100) . mt_rand($j, $j*100) . '</td>'; }
    echo '</tr>';
}
echo '</table>';
*/end>
</html>



<?php

$link = mysqli_connect('localhost','root', 'root', 'data') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
else print "Verbinding is gelukt!";

// Leg verbinding met database world

$dbresultaat = mysqli_select_db( $link,'data');
if ( ! $dbresultaat )
    exit("Database is niet gevonden.") ;
else print "Database is gevonden!" ;



$sql = "SELECT Klantnaam, KlantNr, VerkNr, PlaatsHfdkntr FROM Klant ORDER by KlantNr;" ;
$result = mysqli_query($link, $sql);?>


<table>
    <thead>
    <tr><th>Klantnaam</th><th>KlantNr<th>VerkoopNr</th><th>PlaatsHfdkntr</th><th colspan="2"> Action</th></tr>
    </thead>
    <tbody>


    <?php
    foreach ($result as $row) {
        echo '<tr>';
        foreach ($row as $item) {
            echo "<td>{$item}</td>";
        }
        ?>
        <td>
            <a href="index.php?edit=<?php echo $row['KlantNr']; ?>" class="icon-edit-sign"></a>
        </td>
        <td>
            <a href="server.php?del=<?php echo $row['KlantNr']; ?>" class="icon-remove"></a>
        </td>

        <?        echo '</tr>';}
    ?>


    </tbody>
</table>


<form method="post" action="server.php" >
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Save</button>
    </div>
</form>