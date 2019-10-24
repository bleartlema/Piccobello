<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/Piccobello/CSS/index.css">

    <title>Piccobello</title>
</head>
<body>

<form action="WieGross.php">
    <div class="jumbotron">


        <!--        <nav class="navbar navbar-expand-lg navbar-light bg-light">-->

        <!--            <a class="navbar-brand" href="/Piccobello/start.html">Start</a>-->

        <!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"-->
        <!--                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--                <span class="navbar-toggler-icon"></span>-->
        <!--            </button>-->

        <!--            <div class="collapse navbar-collapse" id="navbarNav">-->
        <!--                <ul class="navbar-nav">-->
        <!--                    <li class="nav-item  ">-->
        <!--                        <a class="nav-link" href="WoService.html" style="color: white;">Wo?</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item ">-->
        <!--                        <a class="nav-link" href="Formulare.html" style="color: white;">Formular</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item  ">-->
        <!--                        <a class="nav-link" href="WoZiehenSieAus.html" style="color: white;">Auszug</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item ">-->
        <!--                        <a class="nav-link" href="AufWelchemStock.html" style="color: white;">Stockwerk</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item aktuell ">-->
        <!--                        <a class="nav-link" href="Lift.html" style="color: white;">Lift</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WieGross.html" style="color: white;">Zimmer & Fläche</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WegVomParkplatz.html" style="color: white;">Strecke Parkplatz</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WasGereinigt.html" style="color: white;">Reinigung</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WelchePunkte.html" style="color: white;">Punkte</a>-->
        <!--                    </li>-->


        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WieVieleFenster.html" style="color: white;">Fenster</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WelcheStoren.html" style="color: white;">Storen</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="OptionaleServices.html" style="color: white;">Zusätzliche Services</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WelcheZimmer.html" style="color: white;">Möbel & Gegenstände</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WoZiehenSieEin.html" style="color: white;">Einzug</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="AufWelchemStockEinzug.html" style="color: white;">Stockwerk</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item ">-->
        <!--                        <a class="nav-link" href="LiftEinzug.html" style="color: white;">Lift</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WieGrossEinzug.html" style="color: white;">Zimmer & Fläche </a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WegVomParkplatzEinzug.html" style="color: white;">Strecke Parkplatz</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="WieVielePersonen.html" style="color: white;">Umzugkartons & Personen</a>-->
        <!--                    </li>-->

        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="Informationen.html" style="color: white;">Wichtige Informationen</a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </nav>-->
        <br>

        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                25%
            </div>
        </div>


        <br><br>

        <div align="center">

            <div class="col-sm-10">
                <h1>Ist ein Lift vorhanden?</h1>
                <br>
                <!--Umzug&Reinigung Button-->
                <button type="submit" id="keinLift" name="keinLift" class="btn btn-primary btn-lg gross">
                    Nein
                </button>

            </div>
            <br>
            <div class="col-sm-10">
                <!--Umzug Buutton-->
                <button type="submit" id="lift2bis3Pers" name="lift2bis3Pers" class="btn btn-primary btn-lg gross">
                    Ja, für 2-3 Personen
                </button>
            </div>
            <br>

            <div class="col-sm-10">
                <!--Umzugsreinigung Button-->
                <button type="submit" id="lift4bis5Pers" name="lift4bis5Pers" class="btn btn-primary btn-lg gross">
                    Ja, für 4-5 Personen
                </button>
            </div>
            <br>
            <div class="col-sm-10">
                <!--Umzugsreinigung Button-->
                <button type="submit" id="lift6+Pers" name="lift6+Pers" class="btn btn-primary btn-lg gross">
                    Ja, für 6+ Personen
                </button>
            </div>
            <br>

            <div class="col-sm-10">
                <!--Umzugsreinigung Button-->
                <button type="submit" id="lift10+Pers" name="lift10+Pers" class="btn btn-primary btn-lg gross">
                    Ja, Warenlift für 10+ Personen
                </button>
            </div>
        </div>
    </div>


</form>
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