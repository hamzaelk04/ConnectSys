<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>ConnectSys</title>
</head>

<body>
    <header>
        <?php
        include_once 'includes/header.php';
        ?>
    </header>

    <section class="main">
        <h1>
            Bienvenue sur <b>ConnectSys
        </h1>

        <div class="buttons">
            <button class="login btn btn-secondary button" onclick="location.href='includes/signUp.php'">
                S'inscrire
            </button>
            <button type="button" class="btn btn-dark button" onclick="location.href='includes/login.php'">
                Se connecter
            </button>
        </div>
    </section>
</body>

</html>