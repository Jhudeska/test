<?php  include('db.php'); ?>
<?php  include('server.php'); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>CRUD: Create, Update, Delete PHP MySQL</title>
</head>
<body>

<h1>CRUD: Create, Update, Delete PHP MySQL</h1>

<?php
$sql = "SELECT Klantnaam, KlantNr, VerkNr, PlaatsHfdkntr FROM Klant ORDER by KlantNr;" ;
$result = mysqli_query($link, $sql);?>


<table>
    <thead>
    <tr><td colspan="5">
            <a href="index.php?edit=<?php echo $row['KlantNr']; ?>" class="icon-long-arrow-left"></a>&nbsp;&nbsp;&nbsp;
            <a href="index.php?edit=<?php echo $row['KlantNr']; ?>" class="icon-plus"></a>
        </td></tr>
    <tr><th>Klantnaam</th><th>KlantNr<th>VerkoopNr</th><th>PlaatsHfdkntr</th><th colspan="2"> Action</th></tr>
    </thead>
    <tbody>


    <?php
    foreach ($result as $row) {
        echo '<tr>';
        foreach ($row as $item) {
            echo "<td>{$item}</td>";
        }?>
        <td>
            <a href="index.php?edit=<?php echo $row['KlantNr']; ?>" class="icon-edit-sign"></a>
        </td>
        <td>
            <a href="server.php?del=<?php echo $row['KlantNr']; ?>" class="icon-remove"></a>
        </td>
        <?php
               echo '</tr>';
    }?>


    </tbody>
</table>
</body>
</html>