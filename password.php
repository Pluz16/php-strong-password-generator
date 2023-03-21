<?php
session_start();

include 'functions.php';

if (isset($_GET['lunghezza'])) {
    $lunghezza = intval($_GET['lunghezza']);
    $passwordGenerata = generaPassword($lunghezza);
    $_SESSION['password'] = $passwordGenerata;
    header('Location: view_password.php');
    exit;
}
?>