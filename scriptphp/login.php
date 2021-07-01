<?php
include_once 'connexion.php';

$email=$_POST['email'];
$pass=$_POST['password'];


if($email !== "" && $pass !== ""){
        $requete = "SELECT count(*) FROM client where 
              email = '".$email."' and _PASSWORD = '".$pass."' ";
        $exec_requete = mysqli_query($connect,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $email;
           header('Location:  ../service.html');
        }
        else
        {
           header('Location:  ../login.html'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location:  ../login.html'); // utilisateur ou mot de passe vide
    }
