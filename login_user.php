<?php
require_once("functions/user.php");

$email = $_POST["email"];
$password = $_POST["password"];

$user = find_user_by_email($email);
if($user == null){
    die("Email or password is not correct!");
}


$verify = password_verify($password,$user["password"]);
if($verify){
    $_SESSION["auth"] = $user;
}else{
    die("Email or password is not correct!");
}