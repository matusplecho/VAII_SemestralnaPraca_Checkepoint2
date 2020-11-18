<?php
require "DBStorage.php";
$storage = new DBStorage();

$seasons = $storage->getIdAll();

//kontrola a spracovanie odstránenia
if (isset($_POST['submit'])  && !empty($_POST['nazov']) && !empty($_POST['cislo'])){
    $idDelete = -1;
    foreach ($seasons as $season)  {
        if((strcasecmp ($season->getNazov(), $_POST['nazov'])==0) && ($season->getCislo() == $_POST['cislo'])){
            $idDelete = $season->getId();
        }
    }

    if($idDelete != (-1)) {
        $storage->deleteSeason($idDelete);

    }else{
        if (isset($_POST['submit'])) {
            echo '<script>alert("Séria s hodnotami, ktoré ste zadal/a nie je v našej databáze!")</script>';
        }
    }
}else{
    if (isset($_POST['submit'])) {
        echo '<script>alert("Musíte vyplniť všetky políčka formuláru!")</script>';
    }
}

//kontrola a spracovanie upravy popisu
if (isset($_POST['uprav'])  && !empty($_POST['meno']) && !empty($_POST['sezona']) && !empty($_POST['text'])){
    $idUprav = -1;


            foreach ($seasons as $season)  {
                if((strcasecmp ($season->getNazov(), $_POST['meno'])==0) && ($season->getCislo() == $_POST['sezona'])){
                    $idUprav = $season->getId();
                }
            }
            if($idUprav != (-1)) {
                $storage->editSeasonPopis($idUprav, $_POST['text']);
            }else{
                if (isset($_POST['uprav'])) {
                    echo '<script>alert("Séria s hodnotami, ktoré ste zadal/a nie je v našej databáze!")</script>';
                }
            }

}else{
    if (isset($_POST['uprav'])) {
        echo '<script>alert("Musíte vyplniť všetky políčka formuláru!")</script>';
    }
}

//kontrola a spracovanie upravy linku pre obrazok
if (isset($_POST['uprav_img'])  && !empty($_POST['name']) && !empty($_POST['season']) && !empty($_POST['link'])){
    $idUpravLink = -1;


    foreach ($seasons as $season)  {
        if((strcasecmp ($season->getNazov(), $_POST['name'])==0) && ($season->getCislo() == $_POST['season'])){
            $idUpravLink = $season->getId();
        }
    }
    if($idUpravLink != (-1)) {
        $storage->editSeasonImgLink($idUpravLink, $_POST['link']);
    }else{
        if (isset($_POST['uprav_img'])) {
            echo '<script>alert("Séria s hodnotami, ktoré ste zadal/a nie je v našej databáze!")</script>';
        }
    }

}else{
    if (isset($_POST['uprav_img'])) {
        echo '<script>alert("Musíte vyplniť všetky políčka formuláru!")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- zaciatok head -->
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</head>
<!-- konec head -->
<!-- zaciatok body -->
<body>
<!-- zaciatok header navbar -->
<header id="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="navbarHeader">
        <a class="navbar-brand text-info font-weight-bold" href="index.php">S_Info</a>
        <!-- button pri zmensenej obrazovke -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- linky v navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="druhy.php">Stránka so seriálom</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="treti.php">Zoznam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pridaj_serial.php">Pridanie série</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edit.php">Úprava série</a>
                </li>
            </ul>
            <!-- search -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<!-- koniec header navbar -->
<!-- zaciatok telo -->
<main>


    <!-- formular pre vymaz seriu -->
    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-12 text-white p-2 font-weight-bold text-center">
                <h1>Vymaž sériu</h1>
            </div>
            <div class="col-md-12 mb-4 text-left bg-secondary align-items-center p-3">

                <form method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 text-light font-weight-bold col-form-label">Názov</label>
                        <div class="col-sm-10">
                            <input type="text" name="nazov" class="form-control" id="formGroupExampleInput" placeholder="Názov seriálu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Číslo</label>
                        <div class="col-sm-10">
                            <input type="number" name="cislo" class="form-control" id="formGroupExampleInput" placeholder="Číslo série 1 - 32">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <input type="submit" name="submit" value="Odstráň" class="btn font-weight-bold btn-light">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!-- formular pre upravu popisu serie -->
    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-12 text-white p-2 font-weight-bold text-center">
                <h1>Uprav popis série</h1>
            </div>
            <div class="col-md-12 mb-4 text-left bg-secondary align-items-center p-3">

                <form method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 text-light font-weight-bold col-form-label">Názov</label>
                        <div class="col-sm-10">
                            <input type="text" name="meno" class="form-control" id="formGroupExampleInput" placeholder="Názov seriálu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Číslo</label>
                        <div class="col-sm-10">
                            <input type="number" name="sezona" class="form-control" id="formGroupExampleInput" placeholder="Číslo série 1 - 32">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 text-light font-weight-bold col-form-label">Popis</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="5" placeholder="Popis série"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <input type="submit" name="uprav" value="Zmeň" class="btn font-weight-bold btn-light">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <!-- formular pre upravu linku obrazka serie -->
    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-12 text-white p-2 font-weight-bold text-center">
                <h1>Uprav link obrázku série</h1>
            </div>
            <div class="col-md-12 mb-4 text-left bg-secondary align-items-center p-3">

                <form method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 text-light font-weight-bold col-form-label">Názov</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Názov seriálu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Číslo</label>
                        <div class="col-sm-10">
                            <input type="number" name="season" class="form-control" id="formGroupExampleInput" placeholder="Číslo série 1 - 32">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 text-light font-weight-bold col-form-label">Link pre obrázok</label>
                        <div class="col-sm-10">
                            <input type="text" name="link" class="form-control" id="formGroupExampleInput" placeholder="Link pre obrázok">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <input type="submit" name="uprav_img" value="Zmeň link" class="btn font-weight-bold btn-light">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>



</main>
<!-- koniec telo -->

<!-- hore -->
<div class="container">
    <div class="row text-center float-right p-2">
        <div class="col-12">
            <a class="btn btn-outline-info btn-lg " href="#" role="button">HORE</a>
        </div>
    </div>
</div>
<!-- zaciatok footer -->
<footer>
    <p>Author: Matúš Plecho
        <br><a href="mailto:plecho@stud.uniza.sk">plecho@stud.uniza.sk</a></p>
</footer>
<!-- koniec footer -->

</body>
<!-- koniec body -->
</html>


