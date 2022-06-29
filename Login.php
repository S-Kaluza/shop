<?php
require_once "header.php";
$dsn = 'pgsql:dbname=postgres;host=localhost';
$user = 'postgres';
$password = 'Persona52116!';
$dbh = new PDO($dsn, $user, $password);
if($_SESSION['User'] == 'guest'){
echo '<div id="test"></div><form action="" method="get">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Adres-e-mail</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Adres e-mail">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Podaj hasło</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Hasło">
  </div>
  </div>
    <form class="mb-5 mt-2 bg-light" method="get" action="" id="Final_Order" name="Final_Order">
        <button type="submit" value="Submit" class="btn btn-primary mb-3">Confirm identity</button>
    </form>
</form>';
if(array_key_exists('id', $_GET)){
    $testSQL = "select exists(select adres_email from course_users where adres_email='" . $_GET['id'] . "')";
    
    $confirmPasswordSQL = "select * from course_users where adres_email = '" . $_GET['id'] . "'";
    $result = $dbh -> query($confirmPasswordSQL) -> fetchAll();
    if(count($result) > 0){
    if($_GET['id'] == $result[0][0]){
        if($_GET['Password'] == $result[0][1]){
            $_SESSION['User'] = $_GET['id'];
        }
    }
}
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