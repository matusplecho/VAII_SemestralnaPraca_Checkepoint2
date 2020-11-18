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
<!-- koniec head -->
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
    <!-- nadpis pre Zoznam -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center p-3">
                <h1 class="font-weight-bold text-white">Zoznam seriálov</h1>
            </div>
        </div>
    </div>
    <!-- zaciatok zoznam -->
    <div class="album py-5 bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://play-images-prod-cms.tech.tvnz.co.nz/api/v1/web/image/content/dam/images/entertainment/shows/m/manifest/Manifest_s2_showtile.png.2019-12-17T10:41:24+13:00.jpg?width=1200&height=630" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="druhy.php" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://www.starhub.com/content/dam/starhub/2019/personal/articles/four-questions-for-game-of-thrones-season-8/masthead-got-the-final-season.jpg" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://bleedingcool.com/wp-content/uploads/2018/05/the-100-season-5.jpg" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://occ-0-531-92.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQYHuuRO8hPojbcDF-eNuU_PppZawwQPwA5e2GX9cNq6Cwa4B51pt1ynmeQmThZHZy6oieGg-jRbP0VdfSLO1O1N00eAY_tiez_lpEghlVr0ytaakKICyi7bZOGcfQ.jpg?r=382" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://s1.econotimes.com/assets/uploads/201605230b209949084c8c602_th_1024x0.jpg" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- obrazok karty -->
                        <img src="https://www.whats-on-netflix.com/wp-content/uploads/2019/06/stranger-things-3-everything-we-know-1.jpg" alt="img" class="rounded mx-auto card-img-top img-fluid d-block">
                        <!-- telo karty -->
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-outline-info btn-lg " href="#" role="button">INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- koniec zoznam -->
    <!-- zaciatok cisla stranok -->
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col-12">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-info">1</button>
                        <button type="button" class="btn btn-info">2</button>
                        <button type="button" class="btn btn-info">3</button>
                        <button type="button" class="btn btn-info">4</button>
                        <button type="button" class="btn btn-info">5</button>
                        <button type="button" class="btn btn-info">6</button>
                        <button type="button" class="btn btn-info">7</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- koniec cisla stranok -->
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
