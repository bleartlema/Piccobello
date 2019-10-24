<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
session_start(); // Session starts here.
?>

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

<!---- Initializing Session for errors --->
<?php
if (!empty($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<div class="jumbotron">


    <!--Navigation der Seiten-->
    <!--    <nav class="navbar navbar-expand-lg navbar-light bg-light">-->

    <!--        <a class="navbar-brand" href="/Piccobello/start.html">Start</a>-->

    <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"-->
    <!--                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--            <span class="navbar-toggler-icon"></span>-->
    <!--        </button>-->

    <!--        <div class="collapse navbar-collapse" id="navbarNav">-->
    <!--            <ul class="navbar-nav">-->
    <!--                <li class="nav-item  aktuell">-->
    <!--                    <a class="nav-link" href="WoService.php" style="color: white;">Wo?</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="Formulare.php" style="color: white;">Formular</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="WoZiehenSieAus.php" style="color: white;">Auszug</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="AufWelchemStock.php" style="color: white;">Stockwerk</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="Lift.php" style="color: white;">Lift</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WieGross.php" style="color: white;">Zimmer & Fläche</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WegVomParkplatz.php" style="color: white;">Strecke Parkplatz</a>-->
    <!--                </li>-->


    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="ZusaetzlicheOptionen.php" style="color: white;">Zusätzliche Services</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WelcheZimmer.php" style="color: white;">Möbel & Gegenstände</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WoZiehenSieEin.php" style="color: white;">Einzug</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="AufWelchemStockEinzug.php" style="color: white;">Stockwerk</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item ">-->
    <!--                    <a class="nav-link" href="LiftEinzug.php" style="color: white;">Lift</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WieGrossEinzug.php" style="color: white;">Zimmer & Fläche </a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WegVomParkplatzEinzug.php" style="color: white;">Strecke Parkplatz</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="WieVielePersonen.php" style="color: white;">Umzugkartons & Personen</a>-->
    <!--                </li>-->

    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="Informationen.php" style="color: white;">Wichtige Informationen</a>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </nav>-->
    <!--NAVIGATION ENDE-->
    <br>


    <?php

    if(isset($_GET['navigation1'])){
        $navigation1 = $_GET['navigation1']; //some_value
    }

    switch ($navigation1) {
        case 1:
            include 'WoService.php';
            break;
        case 2:
            include 'Formulare.php';
            break;
        case 3:
            include 'WoZiehenSieAus.php';
            break;
        case 4:
            include 'WieGross.php';
            break;
        case 5:
            include 'AufWelchemStock.php';
            break;
        case 6:
            include 'Lift.php';
            break;
        case 7:
            include 'WegVomParkplatz.php';
            break;
        case 8:
            include 'ZusaetzlicheOptionen.php';
            break;
        case 9:
            include 'WelcheZimmer.php';
            break;
        case 10:
            include 'WoZiehenSieEin.php';
            break;
        case 11:
            include 'WieGrossEinzug.php';
            break;
        case 12:
            include 'AufWelchemStockEinzug.php';
            break;
        case 13:
            include 'LiftEinzug.php';
            break;
        case 14:
            include 'WegVomParkplatzEinzug.php';
            break;
        case 15:
            include 'WieVielePersonen.php';
            break;
        case 16:
            include 'Informationen.php';
            break;
    }
    ?>
</body>
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


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<!--SCRIPT FÜR DATUM DES UMUZUGS-->
<script>
    $(document).ready(function () {
        var date_input = $('input[name="info_DatumUmzug"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'dd.mm.yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })


</script>
</html>