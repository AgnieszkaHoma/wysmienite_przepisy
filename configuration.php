<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register_php";
$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn) {
    die ("<script>alert('Nieudane połączenie.')</script>");
}

?>