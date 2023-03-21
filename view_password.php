<?php
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    echo "<div class='alert alert-success mt-3' role='alert'>Password generata: <strong>$password</strong></div>";
} else {
    header('Location: index.php');
    exit;
}
?>