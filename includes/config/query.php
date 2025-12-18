<?php
include 'config.php';

$data = "SELECT username, email FROM user_";
$stmt = $conn->query($data);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

$sql = "INSERT INTO user_ (password_, username, email, signup_date)
            VALUES (?, ?, ?, ?)";
$insert = $conn -> prepare($sql);
?>