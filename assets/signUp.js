let btn = document.getElementById('signUp-btn')
let nameRegex = /^[a-zA-Z0-9]+$/;
let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

btn.addEventListener('click', (event) => {
    let password = document.getElementById('password').value
    let cPassword = document.getElementById('cPassword').value
    let username = document.getElementById('username').value
    let email = document.getElementById('email').value

    if (username.length < 3) {
        event.preventDefault()
        alert("Le nom d’utilisateur doit contenir au moins 3 caractères.")
    } else if (!nameRegex.test(username)) {
        event.preventDefault()
        alert("Le nom d’utilisateur doit être alphanumérique (lettres et chiffres uniquement).")
    } else if (!emailRegex.test(email)) {
        event.preventDefault()
        alert("L'email doit être au format de qwerty@example.com")
    } else if (password !== cPassword) {
        event.preventDefault()
        alert("Les mots de passe ne correspondent pas. Veuillez les recréer.")
    }
})