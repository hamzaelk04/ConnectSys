<?php
include 'config.php';

$data = "SELECT username, email FROM user_";
$stmt = $conn->query($data);
$stmt->setFetchMode(PDO::FETCH_ASSOC);


?>