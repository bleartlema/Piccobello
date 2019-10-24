<!--PROGRESSBAR -->
<div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:6%">
        6%
    </div>
</div>
<!--PROGRESSBAR ENDE-->
<br><br>

<div align="center">
    <div class="col-sm-10">

        <br>
        <br>

        <h1>Wo soll der Service stattfinden?</h1>
        <br>
        <h6>Bitte teilen Sie uns mit, wo der Service stattfinden soll,
            damit wir die besten Angebote von Firmen aus Ihrer Region finden können.</h6>
        <br>

        <div class="needs-validation" novalidate>
            <div class="col-sm-10">
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="info_Anrede">Anrede</label>
                            <select class="form-control" name="info_Anrede" id="info_Anrede">
                                <option>Herr</option>
                                <option>Frau</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="info_Vorname">Vorname</label>
                        <input align="center" type="text" class="form-control" name="info_Vorname" id="info_Vorname"
                               placeholder="Vorname" value="" required>
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>

                        <div class="invalid-feedback">
                            Bitte geben Sie Ihren Vornamen ein!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="info_Nachname">Nachname</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_Nachname" id="info_Nachname"
                                   placeholder="Nachname"
                                   aria-describedby="inputGroupPrepend" required>
                            <div class="valid-feedback">
                                Sieht gut aus!
                            </div>

                            <div class="invalid-feedback">
                                Bitte geben Sie Ihren Nachnamen ein!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label align="center" for="info_HandyNr">Mobiltelefon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_HandyNr" id="info_HandyNr"
                                   placeholder="+41 76 123 45 67"
                                   aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="info_Email">E-Mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="info_Email" id="info_Email"
                                   placeholder="picco@bello.ch" required>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <!--UMZUG VON STADT ADRESSE UND PLZ-->

                <h3>Jetziges Zuhause</h3>
                <br>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label align="center" for="info_UmzugVon">Umzug Von</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugVon" id="info_UmzugVon"
                                   placeholder="Stadt"
                                   aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label align="center" for="info_UmzugVonAdresse">Adresse</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugVonAdresse"
                                   id="info_UmzugVonAdresse"
                                   placeholder="Musterstrasse 10"
                                   aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label align="center" for="info_UmzugVonPLZ">Postleizahl</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugVonPLZ" id="info_UmzugVonPLZ"
                                   placeholder="8001"
                                   aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                </div>


                <br>
                <br>


                <!--UMZUG VON STADT ADRESSE PLZ-->
                <H3>Neues Zuhause</H3>
                <br>
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="info_UmzugNach">Umzug Nach</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugNach" id="info_UmzugNach"
                                   placeholder="Stadt" required>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="info_UmzugNachAdresse">Adresse</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugNachAdresse"
                                   id="info_UmzugNachAdresse"
                                   placeholder="Neuemusterstrasse 1" required>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="info_UmzugNachPLZ">Postleizahl</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="info_UmzugNachPLZ" id="info_UmzugNachPLZ"
                                   placeholder="PLZ ">
                        </div>
                    </div>
                </div>


                <br>
                <br>


                <!--Datum DATEPICKER-->
                <h3>Datum des Umzugs </h3>
                <br>

                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label class="control-label" for="info_DatumUmzug">Datum des Umzugs</label>
                        <input align="center" class="form-control" id="info_DatumUmzug" name="info_DatumUmzug"
                               placeholder=""
                               type="text"/>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!---->
    <br>
    <br>



    <?php
    if(isset($_POST['unternavigation'])){
        $unternavigation=$_POST['unternavigation'];
    }
    else{
        $unternavigation=0;
    }

    if( $unternavigation==1){
        echo '<div class="btn-group mr-2" role="group" aria-label="Second group">
        <form action="index.php?navigation1=2" method="post">
            <button type="submit" class="btn btn-primary">Zurück</button>
        </form>
        <!--formaction="/Piccobello/UmzugsUndReinigung/start.html"-->
    </div>';

        echo '<div class="btn-group mr-2" role="group" aria-label="Second group">

        <form action="Abgesendet.php" method="get">
            <button style="color: white;" type="submit" class="btn btn-primary">Absenden</button>
        </form>

    </div>';
    }else{

        echo'<div class="btn-group mr-2" role="group" aria-label="Second group">
        <form action="/Piccobello/start.php" method="get">
            <button type="submit" class="btn btn-primary">Zurück</button>
        </form>
        <!--formaction="/Piccobello/UmzugsUndReinigung/start.html"-->
    </div>';

        echo '<div class="btn-group mr-2" role="group" aria-label="Second group">
<form action=" /Piccobello/Umzug/index.php?navigation1=2" method="post">
            <button type="submit" class="btn btn-primary">
           Weiter
            </button>
            </form>

    </div>';
    }
    ?>
</div>




