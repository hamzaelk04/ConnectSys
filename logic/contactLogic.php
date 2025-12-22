<?php
include '../includes/config/query.php';

if (!isset($_POST['action'])) header('location: ../contacts.php');

switch ($_POST['action']) {
    case 'save':
        echo '1';
        break;
    case 'update':
        echo '2';
        break;
    case 'delete':
        echo '3';
        break;
}

function save()
{
    $name = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $cPassword = $_POST['cPassword'] ?? null;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $date = date('Y-m-d');
    $time = date('H:i:s');

    if (!$username || !$email || !$password || !$cPassword)
        header("location: ../includes/register.php");

    if ($password !== $cPassword)
        header("location: ../includes/register.php");

    try {
        insertIntoDb($hashedPassword, $username, $email, $date);
    } catch (Exception $th) {
        echo 'failed inserting ' . $th->getMessage();
    }
}

?>