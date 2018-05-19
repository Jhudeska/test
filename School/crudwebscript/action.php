<?php

include "db.php";

class DataOperation extends Database
{
    public function insert_record($table, $fileds)
    {
        //"INSERT INTO table_name() VALUES ('', '')";
        $sql = "";
        $sql .= "INSERT INTO " . $table;
        $sql .= " (" . implode(",", array_keys($fileds)) . ") VALUES ";
        $sql .= "('" . implode("','", array_values($fileds)) . "')";
        $query = mysqli_query($this->con, $sql);
        if ($query) {
            return true;
        }
    }


    public function fetch_record($table)
    {
        $sql = "SELECT * FROM " . $table;
        $array = array();
        $query = mysqli_query($this->con, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            $array[] = $row;
        }
        return $array;
    }

    public function select_record($table, $where)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
        // id = '5' AND KlantNaam = 'test'
            $condition .= $key . "='" . $value . "' AND ";
            // echo $condition;
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT * FROM " . $table . " WHERE " . $condition;
        //echo $sql;
        $query = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($query);
        return $row;

    }

    public function update_record($table, $where, $fields)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
        // id = '5' AND KlantNaam = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            //UPDATE table SET KlantNaam = '' , VerkNr = '',  PlaatsHfdknt = '' WHERE id = '';
            $sql .= $key . "='" . $value . "', ";
            //echo $sql;
        }
        $sql = substr($sql, 0  , -2);  if (mysqli_query($this->con, $sql)) {
            return true;
        }
    }

    public function delete_record($table, $where)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql = "DELETE FROM " . $table . " WHERE " . $condition;
        if (mysqli_query($this->con, $sql)) {
            return true;
        }
    }
}

$obj = new DataOperation;


if (isset($_POST["submit"])) {
    $myArray = array(
        "KlantNaam" => $_POST["naam"],
        "VerkNr" => $_POST["verkoper"],
        "PlaatsHfdknt" => $_POST["plaats"]
    );
    if ($obj->insert_record("klant", $myArray)) {
        header("location:index.php?msg=Record Inserted");
    }

}

if (isset($_POST["edit"])) {
    $id = $_POST["KlantNr"];
    $where = array("KlantNr" => $id);
    $myArray = array(
        "KlantNaam" => $_POST["naam"],
        "VerkNr" => $_POST["verkoper"],
        "PlaatsHfdknt" => $_POST["plaats"]
    );
    if ($obj->update_record("klant", $where, $myArray)) {
        header("location:index.php?msg=Record Updated Successfully");
    }

}

if (isset($_GET["delete"])) {
    $id = $_GET["KlantNr"] ?? null;
    $where = array("KlantNr" => $id);
    if ($obj->delete_record("klant", $where)) {
        header("location:index.php?msg=Record Deleted Successfully");
    }


}
?>