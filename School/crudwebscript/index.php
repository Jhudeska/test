<?php

include "action.php";

?>
<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>


<title>CRUD: Create, Read, Update & Delete - PHP MySQL</title>
<link rel="stylesheet" href="" type="text/css" />
<script type="text/javascript"></script>
</head>

<body>

        <!-- Jumbotron and title -->
        <div class="container">
        <div class="jumbotron">
            <h1>CRUD Klant <small>Create, Read, Update & Delete</small><em style="font-size: xx-small">Created by Jhudeska</em></h1>
        </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                <div class="panel panel-warning">
                <div class="panel-heading">Enter Customer Details</div>
                <div class="panel-body">

<?php
//php 7
if(isset($_GET["update"])){
$id = $_GET["KlantNr"] ?? null;
$where = array("KlantNr"=>$id);
$row = $obj->select_record("klant",$where);
?>

<!-- Form  update-->
<form method="post" action="action.php">
<table class="table table-hover">
<input type="hidden" name="KlantNr" value="<?php echo $id; ?>">
<tr>
<td>Klantnaam</td>
<td><input type="text" class="form-control" value="<?php echo $row["KlantNaam"]; ?>" name="naam" placeholder="Voer klantnaam"></td>
</tr>
<tr>
<td>Verkoopnummer</td>
<td><input type="text" class="form-control" value="<?php echo $row["VerkNr"]; ?>" name="verkoper" placeholder="Voer verkoopnummer"></td>
</tr>
<tr>
<td>Plaats</td>
<td><input type="text" class="form-control" name="plaats" value="<?php echo $row["PlaatsHfdkntr"]; ?>" placeholder="Voer plaats"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="edit" value="Update"></td>
</tr>
</table>
</form>

<?php
}else{
?>

<!-- Form  insert-->
<form method="post" action="action.php">
<table class="table table-hover">
<tr>
<td>Klantnaam</td>
<td><input type="text" class="form-control" name="naam" placeholder="Voer klantnaam"></td>
</tr>
<tr>
<td>Verkoopnummer</td>
<td><input type="text" class="form-control" name="verkoper" placeholder="Voer verkoopnummer"></td>
</tr>
<tr>
<td>Plaats</td>
<td><input type="text" class="form-control" name="plaats" placeholder="Voer plaats"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store"></td>
</tr>
</table>
</form>


<?php
}

?>


</div>
</div>
</div>
<div class="col-md-3"></div>
</div>

</div>
<!-- Form  overview-->
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-bordered">
<tr>
<th>#</th>
<th>Klantnaam</th>
<th>VerkNr</th>
<th>PlaatsHfdknt</th>
<th>&nbsp</th>
<th>&nbsp</th>
</tr>


<?php
// fetch records from database in array
$myrow = $obj->fetch_record("klant");
foreach ($myrow as $row) {
?>

<tr>
<td style="text-align: right"><?php echo $row["KlantNr"]; ?></td>
<td><?php echo $row["KlantNaam"];?></td>
<td style="text-align: right"><b><?php echo $row["VerkNr"]; ?></b></td>
<td><?php echo $row["PlaatsHfdkntr"];?></td>
<td style="text-align: right"><a href="index.php?update=1&id=<?php echo $row["KlantNr"]?>" class="btn btn-success">Edit</a></td>
<td style="text-align: right"><a href="action.php?delete=1&id=<?php echo $row["KlantNr"]?>" class="btn btn-danger">Delete</a></td>
</tr>


<?php
}
?>