<?php
// namespace App\Model;
// use PDO;
// use PDOxception;
class DatabaseModel{
  private $dbhost=DB_HOST;
  private $dbname=DB_NAME;
  private $dbuser=DB_USER;
  private $pass=DB_PASS;
  private $conn;
  private $stmt;
function __construct(){
  try {
    $this->conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->pass);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
    } catch(PDOException $e) {
   // echo "Connection failed: " . $e->getMessage();
    }
  }
function __destruct(){ // ham huy class
    unset($this->conn);
}
function get_all($sql){
    $this->stmt=$this->conn->prepare($sql);
    $this->stmt->execute();
    $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
return $this->stmt->fetchAll();
}
// function get_one($sql){
//   $this->stmt=$this->conn->prepare($sql);
//   $this->stmt->execute();
//   $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
// return $this->stmt->fetch();
// }
function get_one($sql,$id){
  $sql_args=array_slice(func_get_args(),1);
  try{
    $this->stmt=$this->conn->prepare($sql);
    $this->stmt->execute($sql_args);
    $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->stmt->fetch();
  }
  catch(PDOExeption $e){
    throw $e;
  }
}

}

    ?>
