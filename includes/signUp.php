<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        
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
                <input type="text" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur:" required>
            </div>
            <div class="div-input">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail:" required>
            </div>
            <div class="div-input">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
            </div>
            <div class="div-input">
                <label class="form-label">Confirmation du mot de passe</label>
                <input type="password" name="cPassword" id="cPassword" class="form-control" placeholder="Confirmation du mot de passe" required>
            </div>
            <div class="buttons buttons-signup d-flex justify-content-end">
                <button type="submit" id="signUp-btn" class="signup-button btn btn-dark" >Se connecter</button>
            </div>
        </form>
    </section>


    <script src="../assets/signUp.js"></script>
</body>

</html>