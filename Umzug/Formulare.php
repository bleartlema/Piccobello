

    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:12%">
            12%
        </div>
    </div>

    <br><br>

    <div align="center">
        <div class="col-sm-10">
            <h1>Bitte wählen Sie eine der folgenden Optionen:</h1>
            <br>
            <!--Umzug&Reinigung Button-->



            <form action="index.php?navigation1=3" method="POST">

                <button type="submit" name="btn_Online" id="btn_Online" class="btn btn-primary btn-lg gross">
                    Online-Formular ausfüllen
                </button>
            </form>
        </div>
        <br>

        <div class="col-sm-10">

            <form action="index.php?navigation1=1" method="POST">
                <input type="hidden" name="unternavigation" value="1">
                <!--Umzugsreinigung Button-->
                <button type="submit" name="btn_Hausbesuch" id="btn_Hausbesuch" class="btn btn-primary btn-lg gross">
                    Hausbesuch vereinbaren
                </button>
            </form>

            <br>
            <form action="index.php?navigation1=1" method="POst">
                <button type="submit" class="btn btn-primary">Zurück</button>
            </form>

        </div>

    </div>


