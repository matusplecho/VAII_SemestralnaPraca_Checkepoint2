<!DOCTYPE html>
<html lang="en">

<!-- zaciatok hlavicka -->
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
<!-- koniec hlavicka -->
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
    <!-- zaciatok hore Nadpis, popisok, obrzok, odrazky -->
    <div class="container">
        <div class="row text-center align-items-center bg-dark ">
            <!--  Nadpis, popisok -->
            <div class="col-lg-8 bg-dark p-3 text-white">
                <h1>Manifest</h1>
                <p>Manifest is an American supernatural drama television series, created by Jeff Rake, that premiered on September 24, 2018, on NBC. The series centers on the passengers and crew of a commercial airliner who suddenly reappear after being presumed dead for more than five years. It stars Melissa Roxburgh, Josh Dallas, Athena Karkanis, J. R. Ramirez, Luna Blaise, Jack Messina, Parveen Kaur, and Matt Long. In October 2018, NBC ordered an additional three episodes of the series, bringing the first season total up to 16 episodes.
                    In April 2019, NBC renewed the series for a second season, which premiered on January 6, 2020. In June 2020, the series was renewed for a third season which is set to premiere in 2021.</p>
            </div>
            <!-- obrazok, odrazky -->
            <div class="col-lg-4">
                <hr class="my-1 horizontalLine m-2">
                <!-- obrazok -->
                <div class="row text-center">
                    <div class="col-lg">
                        <img src="https://images.justwatch.com/backdrop/161547827/s1440/manifest"  alt="img" class="rounded mx-auto d-block img-fluid">
                    </div>
                </div>
                <hr class="my-1 horizontalLine m-2">
                <!-- odrazky -->
                <div class="row text-left text-white">
                    <div class="col-lg">
                        <ul>
                            <li><b>Prvá epizóda:</b> 24. septembra 2018</li>
                            <li><b>Sieť:</b>  NBC</li>
                            <li><b>Počet sezón:</b>  2</li>
                            <li><b>Počet epizód:</b>  29</li>
                            <li><b>Žánre:</b>  Dráma, Pranolmány</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- koniec hore Nadpis, popisok, obrzok, odrazky -->
    <!-- zaciatok popis serii -->
    <div class="container" id="seria">
        <!-- box light -->
        <div class="row text-center align-items-center bg-light p-5 text-black">
            <!-- l obrazok -->
            <div class="col-md-6">
                <img src="https://stingeruniverse.com/wp-content/uploads/2019/03/manifest.jpg"  alt="img" class="rounded mx-auto d-block img-fluid">
            </div>
            <!-- l text -->
            <div class="col-md-6">
                <h2>Prva seria</h2>
                <p>Montego Air Flight 828 from Jamaica to New York City experiences a brief period of severe turbulence. When they land, the passengers and crew learn from NSA director Robert Vance that over five and a half years have passed while they were in the air, during which time they were presumed dead. As they reintegrate themselves into present-day society, the passengers begin to face the fact that their lives—and loved ones—are not the same as they were before, while they also begin to experience guiding voices and visions representing events yet to occur.</p>
                <!-- l button modry -->
                <p><button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#MANIFESTseria1" aria-expanded="false" aria-controls="MANIFESTseria1">
                        Pozri trailer
                    </button></p>
            </div>
            <!-- l video collapse -->
            <div class="col-md-12">
                <div class="collapse" id="MANIFESTseria1">
                    <div class="embed-responsive embed-responsive-16by9 mt-2">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I1hNAIzkQWY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- box secondary -->
        <div class="row text-center align-items-center bg-secondary p-5 text-white">
            <!-- s text -->
            <div class="col-md-6">
                <h2>Druha seria</h2>
                <p>Montego Air Flight 828 from Jamaica to New York City experiences a brief period of severe turbulence. When they land, the passengers and crew learn from NSA director Robert Vance that over five and a half years have passed while they were in the air, during which time they were presumed dead. As they reintegrate themselves into present-day society, the passengers begin to face the fact that their lives—and loved ones—are not the same as they were before, while they also begin to experience guiding voices and visions representing events yet to occur.</p>
                <!-- s button biely -->
                <p><button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#MANIFESTseria2" aria-expanded="false" aria-controls="MANIFESTseria2">
                        Pozri trailer
                    </button></p>
            </div>
            <!-- s obrazok -->
            <div class="col-md-6">
                <img src="https://images.justwatch.com/backdrop/161547827/s1440/manifest" alt="img" class="rounded mx-auto d-block img-fluid">
            </div>
            <!-- s video collapse -->
            <div class="col-md-12">
                <div class="collapse" id="MANIFESTseria2">
                    <div class="embed-responsive embed-responsive-16by9 mt-2">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AdpNbnNEp-k" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- koniec popis serii -->
    <!-- zaciatok postavy -->
    <div class="container" id="postavy">
        <div class="row">
            <!-- nadpis pre tabulku postav -->
            <div class="col-lg-12 text-center p-5">
                <h2 class="font-weight-bold text-white">Hlavné herecké obsadenie</h2>
            </div>
            <!-- tabulka postav -->
            <div class="col-lg-12 p-0">
                <table class="table">
                    <!-- hlavicka tabulky postav -->
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Postava</th>
                        <th scope="col">Herec/Herečka</th>
                        <th scope="col">Počet sezón</th>
                    </tr>
                    </thead>
                    <!-- telo tabulky postav -->
                    <tbody class="text-white">
                    <tr>
                        <td>Michaela Stone</td>
                        <td>Melissa Roxburgh</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Ben Stone</td>
                        <td>Josh Dallas</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Cal Stone</td>
                        <td>Jack Messina</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Olive Stone</td>
                        <td>Luna Blaise</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Grace Stone</td>
                        <td>Athena Karkanis</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Zeke Landon</td>
                        <td>Matt Long</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Det. Jared Williams</td>
                        <td>J.R. Ramirez</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Saanvi Bahl</td>
                        <td>Parveen Kaur</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Drea Mikami</td>
                        <td>Ellen Tamaki</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>TJ Morrison</td>
                        <td>Garrett Wareing</td>
                        <td>1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- koniec postavy -->
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
