<?php
include_once 'connexion.php';



    session_destroy();
    unset($_SESSION['email']);
    header('location: ../index.html');

?>

              