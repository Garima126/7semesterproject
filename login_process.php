<?php
session_start();

require "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];


$res = mysqli_query($con, "select * from users where username='$username' and password='$password'");

if (mysqli_num_rows($res) ==  1) {
    $_SESSION['username'] == $username;
} else {
    header("Location:login.php");
}
