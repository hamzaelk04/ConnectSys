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
        <form class="form-input" action="../logic/logic.php" method="post">
            <div class="div-input">
                <label class="form-label">Nom d’utilisateur</label>
                <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur:">
            </div>
            <div class="div-input">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="buttons buttons-login">
                <div class="signup-button">
                    <span>Si vous n'avez pas de compte: </span>
                    <button type="button" class="btn btn-secondary" onclick="location.href='register.php'">S'inscrire</button>
                </div>
                <button type="submit" value="login" name="submit" class="btn btn-dark" onclick="location.href='../profile.php'">Connexion</button>
            </div>
        </form>

        <?php echo $_POST['username'] ?? ''; ?>
    </section>
</body>

</html>