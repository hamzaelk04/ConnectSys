<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ConnectSys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <!-- HEADER -->
    <header>
        <?php
        include_once 'includes/header.php';
        ?>
    </header>

    <div class="overlay">
        <div class="container-fluid">
            <div class="row g-4">

                <!-- LEFT: CONTACTS LIST -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Contacts</h5>
                            <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                + Add
                            </button>
                        </div>

                        <ul class="list-group list-group-flush" id="contactList">
                            <li class="list-group-item contact-item" data-name="Ahmed Ali" data-phone="0612345678"
                                data-email="ahmed@mail.com" data-address="Rabat">
                                Ahmed Ali
                            </li>

                            <li class="list-group-item contact-item" data-name="Sara Ben" data-phone="0622334455"
                                data-email="sara@mail.com" data-address="Casablanca">
                                Sara Ben
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT: CONTACT DETAILS -->
                <div class="col-md-8">
                    <div class="card shadow-sm h-100">

                        <!-- EMPTY STATE -->
                        <div class="card-body text-center text-muted" id="emptyState">
                            <p class="fs-5">Select a contact to view details</p>
                        </div>

                        <!-- FORM -->
                        <form method="post" action="logic/contactLogic.php" class="card-body d-none" id="contactForm">
                            <h5 class="mb-4">Contact Details</h5>

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea id="address" class="form-control"></textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-primary" type="submit" name="action" value="update">Update</button>
                                <button class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="logic/contactLogic.php" method="post" class="modal-body">
                        <div class="div-input">
                            <label class="form-label">Nom:</label>
                            <input type="text" class="form-control" name="name" placeholder="Nom:">
                        </div>
                        <div class="div-input">
                            <label class="form-label">Numero du telephone:</label>
                            <input type="texte" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="div-input">
                            <label class="form-label">email:</label>
                            <input type="text" name="contactEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="div-input">
                            <label class="form-label">Adresse:</label>
                            <input type="text" name="address" class="form-control" placeholder="Adresse">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="action" class="btn btn-primary" value="save">Enregistrer</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const contacts = document.querySelectorAll('.contact-item');
        const emptyState = document.getElementById('emptyState');
        const form = document.getElementById('contactForm');

        const nameInput = document.getElementById('name');
        const phoneInput = document.getElementById('phone');
        const emailInput = document.getElementById('email');
        const addressInput = document.getElementById('address');

        contacts.forEach(contact => {
            contact.addEventListener('click', () => {

                // Active state
                contacts.forEach(c => c.classList.remove('active'));
                contact.classList.add('active');

                // Show form
                emptyState.classList.add('d-none');
                form.classList.remove('d-none');

                // Fill data
                nameInput.value = contact.dataset.name;
                phoneInput.value = contact.dataset.phone;
                emailInput.value = contact.dataset.email;
                addressInput.value = contact.dataset.address;
            });
        });
    </script>

</body>

</html>