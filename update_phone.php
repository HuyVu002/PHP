<?php 
$id = $_GET["id"];
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$address = $_POST["address"];
$email = $_POST["email"];
// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "book_phone";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}

$sql = "UPDATE list_phone set name='$name',phone_number='$phone_number',address='$address',email='$email' WHERE id=$id";

$conn->query($sql);

header("Location: /");