<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_userlist";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
