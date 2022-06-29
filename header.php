<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sidebar.css">
    
    
</head>
<body>
    <?php
        session_start();
        $_SESSION['basket'];
        $_SESSION['basket'][0] = 1;
        if(!array_key_exists('User', $_SESSION)){
            $_SESSION['User'] = 'guest';
        }
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Strona Główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Categories.php">Kategorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Statut.php">Regulamin</a>
                </li>
                <?php if($_SESSION['User'] == 'guest'){ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="Login.php" tabindex="-1" aria-disabled="true">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Register.php" tabindex="-1" aria-disabled="true">Rejestracja</a>
                </li>
                <?php } else{ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="Login.php?Logout=Logout" tabindex="-1" aria-disabled="true">Wyloguj się</a>
                </li>
                <?php }?>
                <li>
                    <a class="nav-link active" href="basket.php">Koszyk</a>
                </li>
                </ul>
          </div>
          <div class="float-right"><?php echo '<h3>' . $_SESSION['User'] . '</h3>'?></div>
        </div>
      </nav>
    <div class="container">
        
        <div class="row">

            <div class="col-6">

