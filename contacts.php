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
                            <button class="btn btn-secondary btn-sm">
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
                        <div class="card-body d-none" id="contactForm">
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
                                <button class="btn btn-primary">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

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