<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $connect= mysqli_connect("localhost","root","","lifestyle");
            
            //On vérifie la connexion
            if($connect->connect_error){
                die('Erreur : ' .$connect->connect_error);
                
            }
          /*  else{
                echo 'Connexion réussie';
            }*/
            
            
            
 ?>