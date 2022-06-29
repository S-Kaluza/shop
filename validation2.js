const secondForm = document.getElementById('Final_Order')
const errorElement = document.getElementById('error')

const city = document.getElementById('City')
const street = document.getElementById('Street')
const cityKey = document.getElementById('CityKey')
const blik = document.getElementById('BLIK')
const streetNumber = document.getElementById('StreetNumber')

secondForm.addEventListener('submit', (e) => {
    let massages = []
    let cityRe = new RegExp('^([A-Z]{1}[a-ząćęłóźżś]{1,} ?){1,}$')
    let streetRe = new RegExp('^[A-Z]{1}[a-ząćęłóźżś]{1,}$')
    let cityKeyRe = new RegExp('^[0-9]{2}-[0-9]{3}$')
    let blikRe = new RegExp('^[0-9]{6}$')
    let streetNumberRe = new RegExp('^[0-9]{0,}(/[0-9A-Ba-b]{1,3})?$')


    if(city.value === '' || city.value === null){
        massages.push('\nMusisz podać miejscowość w której mieszkasz, są to dane niezbędne do wystawienia faktury')
    }

    if(!cityRe.exec(city.value)){
        massages.push('\nBłędna nazwa miejscowości. Nazwa miejscowości zaczyna się z dużej litery i zawiera ciąg małych znaków alfabetu')
    }

    if(street.value === '' || street.value === null){
        massages.push('\nMusisz podać Ulicę na której mieszkasz, bądź prowadzisz działalność. Są to dane niezbędne do wystawienia faktury')
    }

    if(!streetRe.exec(street.value)){
        massages.push('\nBłędna nazwa ulicy. Nazwa ulicy zaczyna się z dużej litery i zawiera ciąg małych znaków alfabetu')
    }

    if(cityKey.value === ''|| cityKey.value === null){
        massages.push('\nMusisz podać twój kod pocztowy. Są to dane niezbędne do wystawienia faktury')
    }

    else if(!cityKeyRe.exec(cityKey.value)){
        massages.push('\nBłędny kod pocztowy. Kod pocztowy składa się z dwóch cyfr przed przecikiem i 3 cyfr po przecinku')
    }

    if(blik.value === ''|| blik.value === null){
        massages.push('\nMusisz podać twój kod BLIK. Znajdziesz go w swojej aplikacji bankowej, służy on do wykonywania płatności.')
    }

    else if(!blikRe.exec(blik.value)){
        massages.push('\nBłędny kod blik. Kod blik składa się z 6 cyfr')
    }

    if(!streetNumberRe.exec(streetNumber.value)){
        massages.push("Błędny numer ulicy")
    }

    if(massages.length > 0){
        e.preventDefault()
        errorElement.innerText = massages.join(', ')
    }
})