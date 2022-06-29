<?php
require_once "header.php";

$dsn = 'pgsql:dbname=postgres;host=localhost';
$user = 'postgres';
$password = 'Persona52116!';
$dbh = new PDO($dsn, $user, $password);

if(array_key_exists('Order', $_GET)){
    if(!array_search($_GET['Order'], $_SESSION['basket'])){
        $_SESSION['basket'][]=$_GET['Order'];
        echo '<h2>Produkt został dodany do koszyka</h2>
            <form class="mb-5 mt-2 bg-light" action="basket.php">
                <button class="btn btn-warning">Przejdź do koszyka</button>
            </form>';
    }
    else{
        echo '<h1 class="mx-auto">Produkt znajduje się już w koszyku. <a href="basket.php">Czy chcesz dokonać zakupu?</a><h1>';
    }
}
else if(array_key_exists('Course', $_GET)){
    $sql = "select * from courses where course_id='" . $_GET['Course'] . "'";
    foreach ($dbh->query($sql)->fetchAll() as $row){
        echo'
                <div class="col-md-4">
                    <img src="https://picsum.photos/600/400" alt="' . $row['course_name'] .'" class="rounded img-fluid">
                </div>
                <h2 class="mt-4 mt-md-0">' . $row['course_name'] .'</h2>
                <hr>
                <b>Opis: </b>' . $row['course_description'] . '
                <hr>
                <h4>'. $row['course_price'] .'$<h3>
                <hr>
                <form class="mb-5 mt-2 bg-light" method="get" action="Details.php" id="'.$row['course_id'] .'" name="Order">
                    <button class="btn btn-warning" value="'.$row['course_id'] .'" name="Order">Zamów Produkt</button>
                </form>
        ';
    }
}
else{
    echo 'coś chyba jest nie tak';
}
require_once "footer.php";