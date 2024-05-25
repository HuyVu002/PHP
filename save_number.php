<?php 
// received data from FORM
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

$sql = "INSERT INTO list_phone(name,phone_number,address,email) 
                VALUES('$name','$phone_number','$address','$email')";             
$conn->query($sql);
header("Location: /");