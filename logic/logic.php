<?php
// include '../includes/config/config.php';
// include '../includes/config/query.php';
// $users = [];

// while ($row = $stmt->fetch()) {
//     $users[] = $row;
// }

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

    echo $username . '<br>' . $email . '<br>' . $password;
}

register();



// if (!$username || !$email || !$password || !$cPassword) {
//     header("location: ../includes/register.php");
//     exit;
// }

// if ($password !== $cPassword) {
//     header("location: ../includes/register.php");
//     exit;
// }

// try {
//     $conn->prepare($sql)->execute([$hashedPassword, $username, $email, $date]);
// } catch (Exception $e) {
//     header("location: signUp.php");
// }

// session_start();
// $_SESSION["id"] = "";

// header("location: ../profile.php");
?>