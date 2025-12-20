<?php
include 'config.php';

$data = "SELECT username, email FROM user_";
$stmt = $conn->query($data);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

function insert()
{
    global $conn;
    $sql = "INSERT INTO user_ (password_, username, email, signup_date)
            VALUES (?, ?, ?, ?)";
    $insert = $conn->prepare($sql);
    return $insert;
}

function select()
{
    global $conn;
    $sql = "SELECT id, username, password_, signup_date FROM user_";
    $data = $conn -> query($sql);
    $data -> setFetchMode(PDO::FETCH_ASSOC);
    return $data;
}
?>