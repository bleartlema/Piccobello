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


        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                18%
            </div>
        </div>


        <br><br>

        <div align="center">
            <div class="col-sm-10">
                <h1>Wo Ziehen Sie aus?</h1>
                <br>
                <!--Umzug&Reinigung Button-->
                <form action="/Umzug/index.php?navigation1=4">
                <button type="submit"  id="btn_HausAusziehen"
                        class="btn btn-primary btn-lg gross">
                    Haus
                </button>
                </form>
            </div>

            <br>

            <form action="/Piccobello/Umzug/index.php?navigation1=1" method="POST">
            <div class="col-sm-10">
                <!--Wohnung Buutton-->
                <button type="submit"  id="btn_WohnungAusziehen"
                        class="btn btn-primary btn-lg gross">
                    Wohnung
                </button>
            </div>
            </form>

            <br>

            <form action="">
            <div class="col-sm-10">
                <!--WG-Zimmmer Button-->
                <button type="submit"  id="btn_WG-btn_WG-ZimmerAusziehen" formaction="/Piccobello/Umzug/AufWelchemStock.php"
                        class="btn btn-primary btn-lg gross">
                    WG-Zimmer
                </button>
            </div>
            </form>

            <br>

            <form action="">
            <div class="col-sm-10">
                <!--Lager Button-->
                <button type="submit" id="btn_Lager_ausziehen" formaction="/Piccobello/Umzug/AufWelchemStock.php"
                        class="btn btn-primary btn-lg gross">
                    Lager
                </button>
            </div>
            </form>

            <br>

            <form action="">
            <div class="col-sm-10">
                <!--Büro Button-->
                <button type="submit" id="btn_Buero_ausziehen" formaction="/Piccobello/Umzug/AufWelchemStock.php"
                        class="btn btn-primary btn-lg gross">
                    Büro
                </button>
            </div>
            </form>

            <br>
            <br>

            <div class="col-sm-10">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <!--Zurück Button-->
                    <form action="/Piccobello/Umzug/index.php?navigation1=2" method="post">
                    <button type="submit" formaction="" class="btn btn-primary">
                        Zurück
                    </button>
                    </form>
                </div>
            </div>

        </div>

