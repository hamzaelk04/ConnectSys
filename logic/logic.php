<?php
include '../includes/config/query.php';
$users = [];

while ($row = $stmt->fetch()) {
    $users[] = $row;
}

switch ($_POST['submit']) {
    case 'register':
        register();
        break;
    case 'login':
        login();
        break;
}

function register()
{
    if (!isset($_POST['submit']))
        header('location: ../includes/register.php');
    $username = $_POST['username'] ?? null;
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
        echo 'failed inserting ' . $th ->getMessage();
    }
}

function insertIntoDb($password, $username, $email, $date)
{
    // global $insert;

    try {
        insert()->execute([$password, $username, $email, $date]);
        return true;
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}


function login()
{
    if(!isset($_POST['submit'])) header('location: ../includes/login.php');
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    compareData($username, $password);
}

function compareData($username, $password)
{
    
    select();
    foreach (select() as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password_'])) {
            header('location: ../profile.php');
            break;
        } else {
            
        }
    }
    
}
?>