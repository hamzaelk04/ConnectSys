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

    <main class="contactsMain">
        <section class="contacts">
            <form action="" class="w-100 d-flex justify-content-center" method="post">
                <button class="btn btn-secondary w-75">Ajouter un nouveu contact</button>
            </form>
            <table class="table contactTable d-flex justify-content-center w-100">
                <tr>
                    <th scope="row" class="table-secondary text-dark">Contacts:</th>
                </tr>
                <tr>
                    <td>23:38</td>
                </tr>
            </table>
        </section>

        <section class="forms">
            <h2>Contacts</h2>
            <table class="contactTable">
                <tr>
                    <th scope="row">Nom d’utilisateur:</th>
                    <th scope="row">Date d’inscription:</th>
                    <th scope="row">L’heure de connexion:</th>
                </tr>
                <tr>
                    <td>hhhhh</td>
                    <td>23:38</td>
                </tr>
                <tr>
                    <td>23:38</td>
                    <td><input type="text" disabled placeholder="hhh"></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>