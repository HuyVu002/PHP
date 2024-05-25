<?php 
$id = $_GET["id"];

// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "book_phone";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "DELETE FROM list_phone WHERE id = $id";
$conn->query($sql);
header("Location: /");