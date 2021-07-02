<?php
include_once 'connexion.php';

session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
  
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email=$_POST['email'];
    $pass=$_POST['password'];

    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              email = '".$email."' and _PASSWORD = '".$password."' ";
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
           header('Location: login.html'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.html'); // utilisateur ou mot de passe vide
    }
}
