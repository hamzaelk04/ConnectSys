<?php
$servername = "localhost";
$dbname = "db_user";
$username = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    die ('connection failed: '. $th->getMessage());
}
?>