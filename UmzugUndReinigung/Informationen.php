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

<form method="post">
    <div class="jumbotron">


        <!--Progress Bar-->
        <div class="col-sm-10">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                    100%
                </div>
            </div>
        </div>

        <br>

        <div class="col-sm-10">
            <h3> Informationen</h3>
        </div>

        <br>


        <div class="col-sm-10">
            <h5>Personalien</h5>
            <div class="row">

            </div>


            <form class="needs-validation" novalidate>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!--Erste Reihe-->
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label>Anrede</label>
                        <label>Frau</label>
                        <label>Herr</label>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label>Vorname</label>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Nachname</label>
                    </div>
                </div>

                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!--Zweite Reihe-->
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label>E-Mail</label>

                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Mobile Telefon Nr</label>

                    </div>

                </div>

                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!--Dritte Reihe-->
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom03">Umzug Von</label>
                        <!--                        <input type="text" class="form-control" id="validationCustom03" placeholder="Strasse & Nr"-->
                        <!--                               required>-->
                        <!--                        <div class="valid-feedback">-->
                        <!--                            Sieht gut aus!-->
                        <!--                        </div>-->

                        <!--                        <div class="invalid-feedback">-->
                        <!--                            Bitte gebe deine Strasse und Hausnummer ein!-->
                        <!--                        </div>-->
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Postleizahl </label>
                        <!--                        <input type="text" class="form-control" id="validationCustom04" placeholder="PLZ" required>-->

                        <!--                        <div class="valid-feedback">-->
                        <!--                            Sieht gut aus!-->
                        <!--                        </div>-->

                        <!--                        <div class="invalid-feedback">-->
                        <!--                            Bitte gebe deine Postleizahl ein!-->
                        <!--                        </div>-->
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Stadt</label>
                        <!--                        <input type="text" class="form-control" id="validationCustom05" placeholder="Stadt"-->
                        <!--                               required>-->

                        <!--                        <div class="valid-feedback">-->
                        <!--                            Sieht gut aus!-->
                        <!--                        </div>-->

                        <!--                        <div class="invalid-feedback">-->
                        <!--                            Bitte gebe deine Stadt ein!-->
                        <!--                        </div>-->
                    </div>
                </div>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="datumInfo">Datum</label>
                            <!--                            <input class="form-control" id="datumInfo" name="date" placeholder=""-->
                            <!--                                   type="text"/>-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 mb-3">
            <button class="btn btn-primary" type="submit">Absenden</button>
        </div>
    </div>

</form>

</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

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


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


</body>
</html>


<!--            <div class="form-group">-->
<!--                <div class="form-check">-->
<!--                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>-->
<!--                    <label class="form-check-label" for="invalidCheck">-->
<!--                        Agree to terms and conditions-->
<!--                    </label>-->
<!--                    <div class="invalid-feedback">-->
<!--                        You must agree before submitting.-->
<!--                    </div>-->
<!--                </div>-->
