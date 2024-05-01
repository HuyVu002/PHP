<?php 
$id = $_GET["id"];

$name = $_POST["name"];

// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "UPDATE categories set name='$name' WHERE id = $id";
$conn->query($sql);
header("Location: /Category/home.php");