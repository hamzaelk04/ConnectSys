let btn = document.getElementById('signUp-btn')

btn.addEventListener('click', (event) => {
    let password = document.getElementById('password').value
    let cPassword = document.getElementById('cPassword').value
    if (password !== cPassword) {
        event.preventDefault()
        alert("Les mots de passe ne correspondent pas. Veuillez les recréer.")
    }
})