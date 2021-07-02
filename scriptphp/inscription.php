<?php
include_once 'connexion.php';

$fstname=$_POST['fstname'];
$lstname=$_POST['lstname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$sexe=$_POST['sexe'];
 


    if(!empty($fstname) && !empty($lstname) && !empty($pass)&& !empty($email)&&!empty($birthday)&&!empty($height)&&!empty($weight)&&!empty($sexe)){
        $sql = "INSERT INTO client (first_name, last_name, birthday, sexe, taille, poids, email, _PASSWORD)
        VALUES ('".$fstname."','".$lstname."','".$birthday."','".$sexe."','".$height."','".$weight."','".$email."','".$pass."')";
        mysqli_query($connect,$sql);

        header('Location: ../login.html');
        
    }
    else{
        echo"error";
    }
  
    if ($sql ==1 ) {
       
        exit();
     }
    
