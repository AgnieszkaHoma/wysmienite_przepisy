<?php
$conn = mysqli_connect('localhost', 'root', '', 'comment');

if(!$conn) {
    die("Połączenie zostało zerwane" .mysqli_connect_error());
}

?>