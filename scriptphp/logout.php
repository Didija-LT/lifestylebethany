<?php
include_once 'connexion.php';


if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: ../index.html');
}
?>

               /* session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                     header('Location:  ../index.html');
                     
                   }
                }
                else if($_SESSION['email'] !== ""){
                    $user = $_SESSION['email'];
                    // afficher un message
                    header('Location:  ../service.html');
                }
            ?>
            