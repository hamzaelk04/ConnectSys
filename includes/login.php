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
                <input type="text" class="form-control" placeholder="Nom d'utilisateur:">
            </div>
            <div class="div-input">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="buttons buttons-login">
                <div class="signup-button">
                    <span>Si vous n'avez pas de compte: </span>
                    <button type="button" class="btn btn-secondary" onclick="location.href='includes/signUp.php'">S'inscrire</button>
                </div>
                <button type="button" class="btn btn-dark" onclick="location.href='../profile.php'">Connexion</button>
            </div>
        </form>
    </section>
</body>

</html>