<!doctype html>
<html lang="en">
<? include('create.php') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Maak je eigen burrito</h1>

    <a>formaat</a><br>
    <form action="./invoegen.php" method="POST">
        <select class="custom-select" name="formaat">
            <option selected>Maak je keuze</option>
            <option value="20 centimeter">20 centimeter</option>
            <option value="25 centimeter">25 centimeter</option>
            <option value="30 centimeter">30 centimeter</option>
        </select>
        <a>Saus</a><br>
        <select class="custom-select" name="saus">
            <option selected>Maak je keuze</option>
            <option value="Salsa Crudo">Salsa Crudo</option>
            <option value="Salsa Verde">Salsa Verde</option>
            <option value="Salsa Salsa Roja">Salsa Roja</option>
            <option value="Creme Frainche">Creme Fraiche</option>
        </select>
        <a>Bonen</a><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault1" value="Kidney Bonen">
            <label class="form-check-label" value="Kidney Bonen">
                Kidney Bonen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault2" value="Zwarte Bonen">
            <label class="form-check-label" for="flexRadioDefault2" value="Zwarte Bonen">
                Zwarte Bonen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault2" value="Bruine Bonen">
            <label class="form-check-label" for="flexRadioDefault2">
                Bruine Bonen
            </label>
        </div>
        </div>
        <a>Rijst</a><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rijst" id="inlineRadio1" value="Witte Rijst">
            <label class="form-check-label" for="inlineRadio1">Witte Rijst</label><br>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rijst" id="inlineRadio2" value="Zwarte Rijst">
            <label class="form-check-label" for="inlineRadio2">Zwarte Rijst</label><br>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rijst" id="inlineRadio3" value="Bruine Rijst">
            <label class="form-check-label" for="inlineRadio3">Bruine Rijst</label><br>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" name="submit" type="submit">Bestel</button>
        </div>
    </form>
    <br><br><br>
    <a href="./read.php">read.php</a>
    <button href="./read.php">read</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>