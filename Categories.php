<?php
require_once "header.php";
if(!array_search('Java', $_GET)&&
    !array_search('Python', $_GET)&&
    !array_search('R', $_GET)&&
    !array_search('C', $_GET)&&
    !array_search('C++', $_GET)&&
    !array_search('C#', $_GET)){
echo '<h1 class="mt-4 mt-md-0">Java</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o Java</h2>
                <hr>
                <b>Opis: </b>Java to język programowania i platforma do tworzenia oprogramowania komputerowego wprowadzona przez firmę Sun Microsystems po raz pierwszy w 1995 r.
                Ze skromnych początków rozwinęła się w technologię, na której bazuje duża część dzisiejszego świata cyfrowego,
                udostępniającą niezawodną platformę dla wielu usług i aplikacji. Także nowe innowacyjne produkty oraz usługi cyfrowe,
                zaprojektowane z myślą o przyszłości, nadal się opierają na technologii Java.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="Java" name="Java">
                    <button class="btn btn-warning" value="Java" name="Language">Zobacz ofertę Kursów języka java</button>
                </form>

                <h1 class="mt-4 mt-md-0">Python</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o Pythonie</h2>
                <hr>
                <b>Opis: </b>Python jest wysokopoziomowym językiem ogólnego przeznacznenia. 
                W przeciwieństwie do niektórych jęzków, takich jak np. 
                PHP który jest używany głównie do tworzenia skryptów po stronie serwera WWW, 
                możliwości Pythona są bardzo rozległe i jego konkretne zastosowanie zależy
                od bibliotek których się do niego użyje.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="Python" name="Python">
                    <button class="btn btn-warning" value="Python" name="Language">Zobacz ofertę Kursów języka Python</button>
                </form>


                <h1 class="mt-4 mt-md-0">R</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o języku R</h2>
                <hr>
                <b>Opis: </b>R jest jednocześnie językiem programowania,
                środowiskiem obliczeniowym oraz graficznym.
                Celem twórców było stworzenie platformy do obliczeń statystycznych, 
                służącej do prezentowania danych w nowy sposób, 
                oraz tworzenia ciekawych wizualizacji np. w postaci wykresów 3D.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="R" name="R">
                    <button class="btn btn-warning" value="R" name="Language">Zobacz ofertę Kursów języka R</button>
                </form>

                <h1 class="mt-4 mt-md-0">C</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o C</h2>
                <hr>
                <b>Opis: </b>C jest jednym z najstarszych i najszerzej używanych języków programowania. 
                C jest językiem strukturalnym, nie wspomaga programowania obiektowego - 
                choć samo programowanie obiektowe jest w nim możliwe. 
                Odbiega to jednak daleko od tego, jak to wygląda w językach typowo obiektowych. 
                Wiele innych języków takich jak: C++, Java, JavaScript, C#, PHP, Python, Swift, 
                Go, Rust, pożyczyło od niego masę cech.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="C" name="C">
                    <button class="btn btn-warning" value="C" name="Language">Zobacz ofertę Kursów języka C</button>
                </form>

                <h1 class="mt-4 mt-md-0">C++</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o C++</h2>
                <hr>
                <b>Opis: </b>C++ to język ogólnego zastosowania. 
                Programy w C++ mogą być napisane tak, aby były wieloplatformowe bez 
                żadnych modyfikacji, ale tylko, gdy trzymamy się odpowiednich zasad. 
                Niektóre właściwości/biblioteki są dla specyficznych systemów.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="C++" name="C++">
                    <button class="btn btn-warning" value="C++" name="Language">Zobacz ofertę Kursów języka C++</button>
                </form>

                <h1 class="mt-4 mt-md-0">C#</h1>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/600x400" alt="{{ product.name }}" class="img-fluid">
                </div>
                <h2>Dowiedz się więcej o C#</h2>
                <hr>
                <b>Opis: </b>C# jest wysokopoziomowym, obiektowym językiem programowania ogólnego przeznaczenia, 
                który jest odpowiedzią Microsoftu na Jave. C# jest ścisłe zintegrowany z 
                platformą .NET, która jest zarówno frameworkiem jak i środowiskiem 
                uruchomieniowym.
                <form class="mb-5 mt-2 bg-light" method="get" action="" id="C#" name="C#">
                    <button class="btn btn-warning" value="C" name="Language">Zobacz ofertę Kursów języka C#</button>
                </form>';
}
                else {
                    $dsn = 'pgsql:dbname=postgres;host=localhost';
                    $user = 'postgres';
                    $password = 'Persona52116!';
                    $dbh = new PDO($dsn, $user, $password);

                    $sql = "select * from courses where language='" . $_GET['Language'] . "'";
                    foreach ($dbh->query($sql)->fetchAll() as $row){
                        echo'
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/600x400" alt="' . $row['course_name'] .'" class="img-fluid">
                            </div>
                            <h2 class="mt-4 mt-md-0">' . $row['course_name'] .'</h2>
                            <hr>
                            <b>Opis: </b>' . $row['course_description'] . '
                            <hr>
                            <h4>'. $row['course_price'] .'$<h3>
                            <hr>
                            <form class="mb-5 mt-2 bg-light" method="get" action="Details.php" id="'.$row['course_id'] .'" name="Course">
                                <button class="btn btn-warning" value="'.$row['course_id'] .'" name="Course">Zobacz szczegóły</button>
                            </form>
                            ';
                    }
                }
require_once "footer.php";