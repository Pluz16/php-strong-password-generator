<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generatore di password</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1 class="text-center mb-4">Il tuo generatore di password</h1>
                <form method="GET" action="view_password.php">
                <div class="form-group">
                    <label for="lunghezza">Indica la lunghezza della password</label>
                    <input type="number" class="form-control" id="lunghezza" name="lunghezza" min="4" max="64" required>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="numeri" name="numeri">
                    <label class="form-check-label" for="numeri">Includi numeri</label>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="lettere" name="lettere">
                    <label class="form-check-label" for="lettere">Includi lettere</label>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="simboli" name="simboli">
                    <label class="form-check-label" for="simboli">Includi simboli</label>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="ripetizione" name="ripetizione">
                    <label class="form-check-label" for="ripetizione">Consenti ripetizione di caratteri uguali</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Genera la tua password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>