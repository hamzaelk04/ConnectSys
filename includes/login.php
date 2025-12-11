<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include_once 'header.php' ?>
    </header>
    <form action="" method="post">
        <div class="div-input">
            <label class="form-label">Nom d’utilisateur</label>
            <input type="text" class="form-control" placeholder="Nom d'utilisateur:">
        </div>
        <div class="div-input">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" placeholder="Mot de passe">
        </div>
    </form>
    </div>
    <div class="buttons">
        <span>Si vous n'avez pas de compte: </span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Se connecter</button>
    </div>
    </form>
</body>

</html>