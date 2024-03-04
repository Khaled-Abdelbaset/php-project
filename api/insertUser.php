<?php

include("db.php");

$mydb = new DB();

session_start();
if(isset($_SESSION["admin"])){
  
  echo "Admin login";

$data= json_decode(file_get_contents("php://input"),true);


$id = $data['id'];
$fname = $data['fname'];
$lname = $data['lname'];
$email = $data['email'];
$password = $data['password'];
$src = $data['img'];



$mydb->insert_data("admin","id, fname, lname, email, password ,img" , "$id,'$fname','$lname','$email','$password','$src'");


}

?>