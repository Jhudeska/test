<?php
/**
 * CRUD with PDO and OOP PHP
*/

class OopCrud{
    private $host  = "localhost";
    private $user = "root";
    private $db = "test2";
    private $pass = "root";
    private $conn;

    /**
     * OopCrud constructor.
     */
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
    }

    /**
     * @param $table
     * @return array
     */
    public function showData($table){
        $sql ="SELECT * FROM $table";
        $q = $this->conn->query($sql) or die ("failed!");
        while($r = $q->fetch(PDO::FETCH_ASSOC)){
            $data[]=$r;
        }
        return $data;
    }

    /**
     * @param $id
     * @param $table
     * @return mixed
     */
    public function getById($id,$table){
        $sql="SELECT * FROM $table WHERE id = :id";
        $q=$this->conn->prepare($sql);
        $q->execute(array(':id'=> $id));
        $data =$q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    /**
     * @param $id
     * @param $name
     * @param $email
     * @param $mobile
     * @param $address
     * @param $table
     * @return bool
     */
    public function update($id,$name,$email,$mobile,$address,$table){
        $sql = "UPDATE $table SET name=:name,email=:email,mobile=:mobile,address=:address WHERE id=:id";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':id'=>$id,':name'=>$name, ':email'=>$email,':mobile'=>$mobile,':address'=>$address));
        return true;

    }

    /**
     * @param $name
     * @param $email
     * @param $mobile
     * @param $address
     * @param $table
     * @return bool
     */
    public function insertData($name,$email,$mobile,$address,$table){
        $sql = "INSERT INTO $table SET name=:name,email=:email,mobile=:mobile,address=:address";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':email'=>$email, ':mobile'=>$mobile,':address'=>$address));
        return true;
    }


    /**
     * @param $id
     * @param $table
     * @return bool
     */
    public function deleteData($id,$table){
        $sql="DELETE FROM $table WHERE id=:id";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':id'=>$id));
        return true;
    }
}