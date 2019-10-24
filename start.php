<?PHP
session_start();
?>

<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/style.css">


    <title>PICCOBELLO</title>
</head>
<body>


    <div>
        <div class="jumbotron">
            <div align="center">
                <div class="col-sm-10">

                    <br>
                    <br>

                    <div class="col-sm-10">

                        <h1 align="center">Für welchen Service möchten Sie Offerten erhalten?</h1>

                        <br>

                        <form action="Piccobello/UmzugUndReinigung/index?navigation1=1.php" method="post">
                        <!--Umzug&Reinigung Button-->
                        <button type="submit" id="btn_UmzugUndReinigung"
                                class="btn btn-primary btn-lg gross">
                            Umzug & Reinigung
                        </button>
                        <!----------------------------------------------->
                        </form>
                    </div>

                    <br>

                    <div class="col-sm-10">
                    <form action="/Piccobello/Umzug/index.php?navigation1=1" method="post">
                            <!--Umzug Buutton-->
                            <button type="submit" id="btn_Umzug"
                                    class="btn btn-primary btn-lg gross ">
                                    Umzug
                            </button>
                        </form>
                        <!----------------------------------------------->
                    </div>

                    <br>

                    <form action="/Piccobello/Umzugsreinigung/index.php?navigation1=1" method="POST">
                    <div class="col-sm-10">
                        <!--Umzugsreinigung Button-->
                        <button type="submit" id="btn_Umzugsreinigung"
                                class="btn btn-primary btn-lg gross">
                            Umzugsreinigung
                        </button>
                        <!----------------------------------------------->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
</body>


</html>
