<?php


?>

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

<body class="profile-body">
    <header>
        <?php
        include_once 'includes/header.php';
        ?>
    </header>

    <section class="main">
        <h1>
            Bienvenue
        </h1>

        <div class="info">
            <table class="table">
                <tr>
                    <th scope="row">Nom d’utilisateur:</th>
                    <td>hamza</td>
                </tr>
                <tr>
                    <th scope="row">Date d’inscription:</th>
                    <td>12-12-25</td>
                </tr>
                <tr>
                    <th scope="row">L’heure de connexion:</th>
                    <td>23:38</td>
                </tr>
                <tr>
                    <th scope="row">Gestion de contacts:</th>
                    <td>
                        <button type="button" class="btn btn-dark"
                            onclick="location.href='../contacts.php'">Contacts</button>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>