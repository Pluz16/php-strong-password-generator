<?php
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Visualizza password</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1 class="text-center mb-4">La tua password generata</h1>
                <div class="text-center mb-4">
                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#passwordGenerata" aria-expanded="false" aria-controls="passwordGenerata">
                        Mostra password
                    </button>
                </div>
                <div class="collapse" id="passwordGenerata">
                    <div class="alert alert-success mt-3" role="alert">
                        <strong><?php echo $password; ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>