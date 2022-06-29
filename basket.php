<script defer src="validation2.js"></script>
<?php
require_once "header.php";
$dsn = 'pgsql:dbname=postgres;host=localhost';
$user = 'postgres';
$password = 'Persona52116!';
$dbh = new PDO($dsn, $user, $password);
$sum = 0;
if(array_key_exists('finish', $_GET)){
    unset($_SESSION['basket']);
}
if(count($_SESSION['basket']) == 1){
    echo '<h3>Nie wsadziłeś niczego jeszcze do koszyka<h3>';
}
else{
if(array_key_exists('Final_Order', $_GET)){
    if($_SESSION['User'] == 'guest'){
        echo '<h3>Jeśli jesteś zarejestrowany:</h3>
        <form class="mb-5 mt-2 bg-light" method="get" action="Login.php" id="Final_Order" name="Final_Order">
            <button class="btn btn-warning" value="Final_Order" name="Final_Order">Zaloguj się</button>
        </form>';
        echo '<h3>Jeśli nie posiadasz konta użytkownika:</h3>
        <form class="mt-2 bg-light" method="get" action="Register.php" id="Final_Order" name="Final_Order">
            <button class="btn btn-warning" value="Final_Order" name="Final_Order">Zarejestruj się</button>
        </form>';
    }
    else{
        echo '<div id="error"></div>
        <form action="" method="get" id="Final_Order">
        <p>Dane zamawiającego</p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Miejscowość</label>
                <input type="text" class="form-control" id="City" name="City" placeholder="Miejscowość">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ulica</label>
                <input type="text" class="form-control" id="Street" name="Street" placeholder="Ulica">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nr Domu/Mieszkania</label>
                <input type="text" class="form-control" id="StreetNumber" name="StreetNumber" placeholder="nr Domu/Mieszkania">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kod pocztowy</label>
                <input type="text" class="form-control" id="CityKey" name="CityKey" placeholder="Kod pocztowy">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ulica</label>
                <input type="text" class="form-control" id="BLIK" name="BLIK" placeholder="BLIK">
            </div>
            <p>Sposób Płatności</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="PaymantWay_Blik" checked disabled>
                <label class="form-check-label" for="PaymantWay_Blik">
                    BLIK
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="PaymantWay_Przelewy24" disabled>
                <label class="form-check-label" for="PaymantWay_Przelewy24">
                    Przelewy 24
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="PaymantWay_GooglePay" disabled>
                <label class="form-check-label" for="PaymantWay_GooglePay">
                    Google Pay
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="PaymantWay_SMS" disabled>
                <label class="form-check-label" for="PaymantWay_SMS">
                    SMS
                </label>
            </div>

            <form class="mb-5 mt-2 bg-light" method="get" action="" id="finish" name="finish">
                <button type="submit" value="Submit" class="btn btn-primary mb-3">Zamawiam z obowiązkiem zapłaty</button>
            </form>
        </form>';
        $_SESSION['basket'] = null;
    }
}
else{
foreach($_SESSION['basket'] as $value){
    if(is_string($value)){
        $sql = "select * from courses where course_id='" . $value . "'";
        foreach ($dbh->query($sql)->fetchAll() as $row){
            echo'
                    <div class="col-md-4">
                        <img src="https://picsum.photos/600/400" alt="' . $row['course_name'] .'" class="rounded img-fluid">
                    </div>
                    <h2 class="mt-4 mt-md-0">' . $row['course_name'] .'</h2>
                    <hr>
                    <b>Opis: </b>' . $row['course_description'] . '
                    <hr>
            ';
            $sum += intval($row['course_price']);
        }
    }
}
if($sum > 0){
    echo '<h5>Wartość twojego zamówienia wynosi: ' . $sum . '$</h5> 
    <form class="mb-5 mt-2 bg-light" method="get" action="" id="Final_Order" name="Final_Order">
    <button class="btn btn-warning" value="Final_Order" name="Final_Order">Przejdź do realizacji zamówienia</button>
    </form>';

}
}
}

require_once "footer.php";