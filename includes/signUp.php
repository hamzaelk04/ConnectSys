<?php
include 'config/config.php';
include 'config/query.php';
$users = [];



while ($row = $oldData->fetch_assoc()) {
    $users[] = $row;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $date = date('Y-m-d');
    $time = date('H:i:s');

    if (!$username || !$email || !$password || !$cPassword) {
        header("location: signUp.php");
        exit;
    }

    if ($password !== $cPassword) {
        header("location: signUp.php");
        exit;
    }


    $sql = "INSERT INTO user_ (password_, username, email, signup_date)
            VALUES ('$hashedPassword', '$username', '$email', '$date')";

    if ($conn->query($sql) == true) {
        header("location: ../profile.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include_once 'header.php' ?>
    </header>
    <section class="main">
        <form class="form-input" action="" method="post">
            <div class="div-input">
                <label class="form-label">Nom d’utilisateur</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur:">
            </div>
            <div class="div-input">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail:">
            </div>
            <div class="div-input">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="div-input">
                <label class="form-label">Confirmation du mot de passe</label>
                <input type="password" name="cPassword" id="cPassword" class="form-control"
                    placeholder="Confirmation du mot de passe">
            </div>
            <div class="buttons buttons-signup d-flex justify-content-end">
                <button type="submit" id="signUp-btn" class="signup-button btn btn-dark">Se connecter</button>
            </div>
        </form>
    </section>

    <script>
        const users = <?= json_encode($users) ?>;
    </script>
    <script src="../assets/signUp.js"></script>
</body>

</html>