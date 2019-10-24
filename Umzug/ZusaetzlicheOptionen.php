<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="/Piccobello/CSS/index.css">


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Piccobello</title>
</head>
<body>
<div class="jumbotron">

    <!--Progress Bar-->
    <!--    <nav class="navbar navbar-expand-lg navbar-light bg-light">-->

    <!--        <a class="navbar-brand" href="/Piccobello/start.html">Start</a>-->

    <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"-->
    <!--                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--            <span class="navbar-toggler-icon"></span>-->
    <!--        </button>-->

    <!--        <div class="collapse navbar-collapse" id="navbarNav">-->
    <!--            <ul class="navbar-nav">-->
    <!--                <li class="nav-item  ">-->
    <!--                    <a class="nav-link" href="WoService.html" style="color: white;">Wo?</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="Formulare.html" style="color: white;">Formular</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item  ">-->
    <!--                    <a class="nav-link" href="WoZiehenSieAus.html" style="color: white;">Auszug</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="AufWelchemStock.html" style="color: white;">Stockwerk</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item  ">-->
    <!--                    <a class="nav-link" href="Lift.html" style="color: white;">Lift</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="WieGross.html" style="color: white;">Zimmer & Fläche</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="WegVomParkplatz.html" style="color: white;">Strecke Parkplatz</a>-->
    <!--                </li>-->



    <!--                <li class="nav-item aktuell">-->
    <!--                    <a class="nav-link" href="OptionaleServices.html" style="color: white;">Zusätzliche Services</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WelcheZimmer.html" style="color: white;">Möbel & Gegenstände</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WoZiehenSieEin.html" style="color: white;">Einzug</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="AufWelchemStockEinzug.html" style="color: white;">Stockwerk</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="LiftEinzug.html" style="color: white;">Lift</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WieGrossEinzug.html" style="color: white;">Zimmer & Fläche </a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WegVomParkplatzEinzug.html" style="color: white;">Strecke Parkplatz</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WieVielePersonen.html" style="color: white;">Umzugkartons & Personen</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="Informationen.html" style="color: white;">Wichtige Informationen</a>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </nav>-->

    <br>


    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:48%">
            48%
        </div>
    </div>



    <!--COUNTER MIT + - FÜR DIE ANZAHL ZIMMER UND FLÄCHE -->


    <div class="container mt-5">
        <h1 align="center">Wünschen Sie zusätzliche Services?</h1>


        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="col-sm-10">

                        <!--Abbau der Möbel Checkbox/-->
                        <div class="custom-control custom-checkbox">

                            <input type="checkbox" class="custom-control-input" id="AbbauMöbel_checkb">
                            <label class="custom-control-label" for="AbbauMöbel_checkb">
                                <h7>Abbau der Möbel</h7>
                            </label>
                        </div>

                        <!--Klavier Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Klavier_checkb">

                            <label class="custom-control-label" for="Klavier_checkb">
                                <h7>Klavier</h7>
                            </label>
                        </div>

                        <!--Zwischenlagerung Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Zwischenlagerung_checkb">
                            <label class="custom-control-label" for="Zwischenlagerung_checkb">
                                <h7>Zwischenlagerung</h7>
                            </label>
                        </div>

                        <!--Wasserbett Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Wasserbett_checkb">
                            <label class="custom-control-label" for="Wasserbett_checkb">
                                <h7>Wasserbett</h7>
                            </label>
                        </div>

                        <!--Entsorgung Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Entsorgung_checkb">
                            <label class="custom-control-label" for="Entsorgung_checkb">
                                <h7>Entsorgung</h7>
                            </label>
                        </div>

                        <!--Einpackservice Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Einpackservice_checkb">
                            <label class="custom-control-label" for="Einpackservice_checkb">
                                <h7>Einpackservice</h7>
                            </label>
                        </div>

                        <!--Auspackservice Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Auspackservice_checkb">
                            <label class="custom-control-label" for="Auspackservice_checkb">
                                <h7>Auspackservice</h7>
                            </label>
                        </div>


                        <!--Tresor Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Tresor_checkb">
                            <label class="custom-control-label" for="Tresor_checkb">
                                <h7>Tresor</h7>
                            </label>
                        </div>


                        <!--Nichts Checkbox-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Nichts_checkbox">
                            <label class="custom-control-label" for="Nichts_checkbox">
                                <h7>Nichts Davon</h7>
                            </label>
                        </div>


                        <br>
                        <br>


                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <form action="WegVomParkplatz.html">
                                <button type="submit" class="btn btn-primary">Zurück</button>
                            </form>
                        </div>

                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <form action="WelcheZimmer.html">
                                <button type="submit" class="btn btn-primary">Weiter</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>
</html>