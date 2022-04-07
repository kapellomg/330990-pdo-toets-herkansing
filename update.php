<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Burrito</title>
</head>

<body>

    <div class="container">
        <div class="mb-3">
            <h1 class="text-center">Data wijzigen</h1>
        </div>
        <form action="./update_script.php" method="POST">
            <div class="mb-3">
                <label for="formaat" class="form-label">formaat</label>
                <select class="form-select" aria-label="Default select example" name="formaat">
                    <option selected>Formaat</option>
                    <option value="20">20 cm</option>
                    <option value="25">25 cm</option>
                    <option value="30">30 cm</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="saus" class="form-label">Saus</label>
                <select class="form-select" aria-label="Default select example" name="saus">
                    <option selected>Saus</option>
                    <option value="Salsa_crudo">Salsa crudo</option>
                    <option value="Salsa_verde">Salsa verde</option>
                    <option value="Salsa_roja">Salsa roja</option>
                    <option value="créme_fraiche">Créme fraiche</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="bonen" class="form-label">Bonen</label>
                <div class="form-check">
                    <input class="form-check-input" name="bonen" value="Kidney Bonen" type="radio" name="Kidney Bonen" id="Kidney Bonen">
                    <label class="form-check-label" for="Kidney Bonen">
                        Kidney Bonen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="bonen" value="Zwarte Bonen" type="radio" name="Zwarte Bonen" id="Zwarte Bonen">
                    <label class="form-check-label" for="Zwarte Bonen">
                        Zwarte Bonen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="bonen" value="Bruine bonen" type="radio" name="Bruine bonen" id="Bruine bonen">
                    <label class="form-check-label" for="Bruine bonen">
                        Bruine bonen
                    </label>
                </div>
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">rijst</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rijst" value="Witte_rijst" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Witte rijst
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="rijst" type="checkbox" value="Zwarte_rijst" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Zwarte rijst
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="rijst" type="checkbox" value="Bruine_rijst" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Bruine rijst
                    </label>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
            <div class="mb-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="submit" type="submit">Wijziging</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>