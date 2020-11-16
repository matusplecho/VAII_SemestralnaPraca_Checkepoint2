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
    <!-- zaciatok Vitajte -->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 bg-info p-5 text-white mb-5">
                <!-- text-->
                <h1 class="display-4 font-weight-bold">Vitajte!</h1>
                <p class="lead font-weight-bold">Táto stránka Vám dá informácie o Vašich obľúbených seriáloch.</p>
                <hr class="my-4 horizontalLine1">
                <p class="font-weight-bold">Ak chcete vyhľadať seriál kliknite nižšie!</p>
                <!-- button na zoznam -->
                <a class="btn btn-outline-light btn-lg " href="treti.php" role="button">Zoznam seriálov</a>
            </div>
        </div>
    </div>
    <!-- koniec Vitajte -->
    <!-- zaciatok Nove -->
    <div class="container">
        <div class="row text-center ">
            <!-- napis -->
            <div class="col-md-12 mb-4 text-center align-items-center p-3">
                <h1 class="font-weight-bold text-white">Najnovšie</h1>
            </div>
            <!-- nove white box -->
            <div class="col-md-4 mb-4 text-center align-items-center p-5 bg-light text-dark">
                <img src="https://play-images-prod-cms.tech.tvnz.co.nz/api/v1/web/image/content/dam/images/entertainment/shows/m/manifest/Manifest_s2_showtile.png.2019-12-17T10:41:24+13:00.jpg?width=1200&height=630" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine m-2">
                <h2>Manifest</h2>
                <p>2 sezóny</p>
                <p>Predĺžený na 3. sériu</p>
                <a class="btn btn-outline-info btn-lg " href="VAII_SemestralnaPraca_Checkepoint2/druhy.php" role="button">INFO</a>
            </div>
            <!-- nove secondary box -->
            <div class="col-md-4 mb-4 text-center align-items-center bg-secondary p-5 text-white">
                <img src="https://bleedingcool.com/wp-content/uploads/2018/05/the-100-season-5.jpg" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine1 m-2">
                <h2>The 100</h2>
                <p>7 sézón</p>
                <p>Ukončený 7. sériou</p>
                <a class="btn btn-outline-light btn-lg " href="#" role="button">INFO</a>
            </div>
            <!-- nove white box -->
            <div class="col-md-4 mb-4 text-center align-items-center p-5 bg-light text-dark">
                <img src="https://occ-0-531-92.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQYHuuRO8hPojbcDF-eNuU_PppZawwQPwA5e2GX9cNq6Cwa4B51pt1ynmeQmThZHZy6oieGg-jRbP0VdfSLO1O1N00eAY_tiez_lpEghlVr0ytaakKICyi7bZOGcfQ.jpg?r=382" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine m-2">
                <h2>Witcher</h2>
                <p>1 sezóna</p>
                <p>Predĺžený na 2. sériu</p>
                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
            </div>
            <!-- l button light -->
            <div class="col-md-12">
                <p><button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#AktualityViac" aria-expanded="false" aria-controls="AktualityViac">
                        VIAC
                    </button></p>
            </div>
        </div>
        <!-- zaciatok Viac nove -->
        <div class="row text-center collapse" id="AktualityViac">
            <!-- nove secondary box -->
            <div class="col-md-4 mb-4 text-center align-items-center bg-secondary p-5 text-white">
                <img src="https://www.starhub.com/content/dam/starhub/2019/personal/articles/four-questions-for-game-of-thrones-season-8/masthead-got-the-final-season.jpg" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine1 m-2">
                <h2>Game of thrones</h2>
                <p>8 sézón</p>
                <p>Ukončený 8. sériou</p>
                <a class="btn btn-outline-light btn-lg " href="#" role="button">INFO</a>
            </div>
            <!-- nove white box -->
            <div class="col-md-4 mb-4 text-center align-items-center p-5 bg-light text-dark">
                <img src="https://s1.econotimes.com/assets/uploads/201605230b209949084c8c602_th_1024x0.jpg" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine m-2">
                <h2>The Vampire Diaries</h2>
                <p>8 sezón</p>
                <p>Ukončený 8. sériou</p>
                <a class="btn btn-outline-info btn-lg " href="druhy.php" role="button">INFO</a>
            </div>
            <!-- nove secondary box -->
            <div class="col-md-4 mb-4 text-center align-items-center bg-secondary p-5 text-white">
                <img src="https://www.whats-on-netflix.com/wp-content/uploads/2019/06/stranger-things-3-everything-we-know-1.jpg" alt="img" class="rounded mx-auto img-fluid d-block">
                <hr class="my-1 horizontalLine1 m-2">
                <h2>Stranger Things</h2>
                <p>3 sezóny</p>
                <p>Predĺžený na 4. sériu</p>
                <a class="btn btn-outline-light btn-lg " href="#" role="button">INFO</a>
            </div>
            <!-- l button modry -->
            <div class="col-md-12">
                <p><button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#AktualityViac" aria-expanded="false" aria-controls="AktualityViac">
                        Menej
                    </button></p>
            </div>
        </div>
        <!-- Koniec Viac nove -->
    </div>
    <!-- koniec Nove -->
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
