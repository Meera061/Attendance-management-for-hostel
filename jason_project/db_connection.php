<?php
$host = "localhost";
$user = "root";
$pass = "Prasad792002@";
$db = "jason";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>