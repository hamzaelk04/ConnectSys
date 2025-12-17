<?php 
$servername = "localhost";
$dbname = "db_user";
$username = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

$conn = new PDO($dsn, $username, $password);
?>