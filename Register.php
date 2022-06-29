<script defer src="validation.js"></script>
<?php
require_once "header.php";
if($_SESSION['User'] == 'guest'){
    if(!array_key_exists('id', $_GET)){
echo '<div id="error"></div><form action="" method="get" id="registration">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Adres-e-mail</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Adres e-mail">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Podaj hasło</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Hasło">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Powtórz hasło</label>
  <input type="password" class="form-control" id="RepeatPassword" name="RepeatPassword" placeholder="Powtórz hasło">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Podaj imię</label>
    <input type="text" class="form-control" id="First_Name" name="First_Name" placeholder="Imie">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Podaj nazwisko</label>
    <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Nazwisko">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Podaj Numer telefonu</label>
    <input type="text" class="form-control" id="Phone_Number" name="Phone_Number" placeholder="Numer Telefonu">
  </div>
    <form class="mb-5 mt-2 bg-light" method="get" action="" id="Final_Order" name="Final_Order">
        <button type="submit" value="Submit" class="btn btn-primary mb-3">Confirm identity</button>
    </form>
</form>';
}
else{
    $dsn = 'pgsql:dbname=postgres;host=localhost';
    $user = 'postgres';
    $password = 'Persona52116!';
    $dbh = new PDO($dsn, $user, $password);

    $testSQL = "select exists(select adres_email from course_users where adres_email='" . $_GET['id'] . "')";
    $result = $dbh -> query($testSQL) -> fetchAll();
    if(!$result[0]['exists']){
    $sql = "insert into course_users (adres_email, password, name, surname, phone_number) values ('" . $_GET['id'] ."', '" . $_GET['Password'] . "', '" . $_GET['First_Name'] . "', '" . $_GET['Surname'] . "', '" . $_GET['Phone_Number'] . "')";
    $dbh->query($sql);
    }
    else{
        echo 'Nie udało się dodać użytkownika gdyż osoba o takim adresie e-mail istnieje w naszej bazie danych, spróbuj jeszcze raz.';
    }
    $_SESSION['User'] = $_GET['id'];
    echo "<h1>Zostałeś zalogowany</h1>";
}
}
else{
    echo 'Jesteś zalogowany. Czy chcesz zmienić konto?
    <form class="mb-5 mt-2 bg-light" method="get" action="" id="Logout" name="Logout">
        <button class="btn btn-warning" value="Logout" name="Logout">Wyloguj się</button>
    </form>';
}

if(array_key_exists('Logout', $_GET)){
    $_SESSION['User'] = 'guest';
}
require_once "footer.php";