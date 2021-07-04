<?php
include_once 'connexion.php';
?>

<?php

// Use to fetch product data
class Product
{
   
    // fetch product data using getData Method
    public function getData($table = 'produit'){
        $result = "SELECT * FROM {$table}" ;
        $exec_requete = mysqli_query($connect,$result);
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'produit'){
        if (isset($item_id)){
            $result = "SELECT * FROM {$table}" ;
            $exec_requete = mysqli_query($connect,$result);
            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }




}