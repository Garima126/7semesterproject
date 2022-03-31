<?php 

require "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$res = mysqli_query($con, "insert into users(id, username, password, email, phone, address)
values('null',  '$username', '$password', '$email', '$phone', '$address')");


header("Location:register.php?res=true");
