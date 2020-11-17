<?php
require "DBStorage.php";
$storage = new DBStorage();

/*if (isset($_POST['nazov'], $_POST['cislo'], $_POST['video_link'], $_POST['img_link'], $_POST['popis'])){*/
if (isset($_POST['submit'])){
    $season = new Season($_POST['nazov'], $_POST['cislo'], $_POST['video_link'], $_POST['img_link'], $_POST['popis']);
    $storage->saveSeason($season);
}

$seasons = $storage->getAll();

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
                    <a class="nav-link" href="druhy.php">Stranka so serialom</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="treti.php">Zoznam</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manifest</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#top">Úvod</a>
                        <a class="dropdown-item" href="#seria">Sezóny</a>
                        <a class="dropdown-item" href="#postavy">Postavy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>-->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
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
    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-12 text-info p-2 font-weight-bold text-center">
                <h1>Pridajte seriu</h1>
            </div>
            <div class="col-md-12 mb-4 text-left bg-secondary align-items-center p-3">

                <form method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 text-light font-weight-bold col-form-label">Nazov</label>
                        <div class="col-sm-10">
                            <input type="text" name="nazov" class="form-control" id="formGroupExampleInput" placeholder="Nazov serialu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Cislo</label>
                        <div class="col-sm-10">
                            <input type="number" name="cislo" class="form-control" id="formGroupExampleInput" placeholder="Cislo série">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Video</label>
                        <div class="col-sm-10">
                            <input type="text" name="video_link" class="form-control" id="formGroupExampleInput" placeholder="Link na video">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 text-light font-weight-bold col-form-label">Obrazok</label>
                        <div class="col-sm-10">
                            <input type="text" name="img_link" class="form-control" id="formGroupExampleInput" placeholder="Link na obrazok">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 text-light font-weight-bold col-form-label">Popis</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="popis" id="exampleFormControlTextarea1" rows="5" placeholder="Popis série"></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <input type="submit" name="submit" value="Pridaj" class="btn font-weight-bold btn-light">
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

