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
                <form method="GET" action="index.php">
                    <div class="form-group">
                        <label for="lunghezza">Indica la lunghezza della password</label>
                        <input type="number" class="form-control" id="lunghezza" name="lunghezza" min="4" max="64" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Genera la tua password</button>
                </form>
                <?php
                if (isset($_GET['lunghezza'])) {
                    $lunghezza = intval($_GET['lunghezza']);

                    function generaPassword($lunghezza) {
                        $caratteri = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;:,.<>?';
                        $password = '';
                        for ($i = 0; $i < $lunghezza; $i++) {
                            $carattere = $caratteri[rand(0, strlen($caratteri) - 1)];
                            if (ctype_alpha($carattere) && rand(0, 1)) {
                                $carattere = strtoupper($carattere);
                            }
                            $password .= $carattere;
                        }
                        return $password;
                    }

                    $passwordGenerata = generaPassword($lunghezza);
                    echo "<div class='alert alert-success mt-3' role='alert'>Password generata: <strong>$passwordGenerata</strong></div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>