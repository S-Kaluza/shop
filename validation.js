const adres_email = document.getElementById("id")
const password = document.getElementById("Password")
const RepeatPassword = document.getElementById("RepeatPassword")
const myName = document.getElementById("First_Name")
const surname = document.getElementById("Surname")
const phoneNumber = document.getElementById("Phone_Number")
const city = document.getElementById('City')
const street = document.getElementById('Street')
const cityKey = document.getElementById('CityKey')
const blik = document.getElementById('BLIK')
const form = document.getElementById('registration')
const secondForm = document.getElementById('finish')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let massages = []
    let adresEmailRe = new RegExp('^[a-zA-Z0-9]{3,}@[a-zA-Z0-9.]{3,}$')
    let passRe = new RegExp('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*]).{6,}$')
    let nameRe = new RegExp('^[A-Z]{1}[a-ząćęłóźżś]{1,}$')
    let phoneRe = new RegExp('^[0-9]{9}$')

    if(adres_email.value === '' || adres_email.value == null){
        massages.push('Musisz podać swój adres e-mail')
    }

    if(!adresEmailRe.exec(adres_email.value)){
        massages.push('Błędny format adresu e-mail. Adres e-mail musi posiadać dwa człony rozdzielone @, a także przed tym znakiem nie powinno być znaku "."')
    }

    if(password.value ==='' || password.value === null){
        massages.push('\nHasło nie może być pustę')
    }
    else if(!passRe.exec(password.value)){
        massages.push('\nHasło musi posiadać: \nCo najmniej jedną dużą literę\nCo najmniej jedną małą literę\nCo najmniej jedną cyfrę\nCo najmniej jeden znak specjalny(!@#$%^&*)\nCo najmniej 6 znaków')
    }
    

    if(RepeatPassword.value ==='' || RepeatPassword.value === null || RepeatPassword.value != password.value){
        massages.push('\nPodane hasła muszą być identyczne')
    }

    if(myName.value === '' || myName.value === null || !nameRe.exec(myName.value)){
        massages.push('\nBłędna imie. Imie powinno zaczynać się z dużej litery i zawierać ciąg małych znaków alfabetu')
    }

    if(surname.value === '' || surname.value === null || !nameRe.exec(surname.value)){
        massages.push('\nBłędne nazwisko. Nazwisko powinno zaczynać się z dużej litery i zawierać ciąg małych znaków alfabetu')
    }

    if(phoneNumber.value === '' || phoneNumber.value === null || !phoneRe.exec(phoneNumber.value)){
        massages.push('\nBłędny numer telefonu. Numer telefonu powinien zawierać 9 cyfr. Nie powinno się podawać numeru kierunkowego.')
    }

    if(massages.length > 0){
        e.preventDefault()
        errorElement.innerText = massages.join(', ')
    }
})



