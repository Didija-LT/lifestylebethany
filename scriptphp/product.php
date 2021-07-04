<?php
include_once 'connexion.php';

if(isset($_GET['ref_produit']))  { $resultat = executeRequete("SELECT * FROM produit WHERE ref_produit = '$_GET[ref_produit]'"); }
if($resultat->num_rows <= 0) { header("location: ../portfolio-details.html "); exit(); }
 
$produit = $resultat->fetch_assoc();
$contenu .= "<h2>name : $produit[name]</h2><hr><br>";
$contenu .= "<img src='$produit[image]' ='150' height='150'>";
$contenu .= "<p><i>Description: $produit[description]</i></p><br>";
$contenu .= "<p>Prix : $produit[prix] €</p><br>";
 
if($produit['quatiter_stock'] > 0)
{
    $contenu .= "<i>Nombre d'produit(s) disponible : $produit[quatiter_stock] </i><br><br>";
    $contenu .= '<form method="post" action="panier.php">';
        $contenu .= "<input type='hidden' name='ref_produit' value='$produit[ref_produit]'>";
        $contenu .= '<label for="quantite">Quantité : </label>';
        $contenu .= '<select id="quantite" name="quantite">';
            for($i = 1; $i <= $produit['quatiter_stock'] && $i <= 5; $i++)
            {
                $contenu .= "<option>$i</option>";
            }
        $contenu .= '</select>';
        $contenu .= '<input type="submit" name="ajout_panier" value="ajout au panier">';
    $contenu .= '</form>';
}
else
{
    $contenu .= 'Rupture de quatiter_stock !';
}
$contenu .= "<br><a href='boutique.php?categorie=" . $produit['categorie'] . "'>Retour vers la séléction de " . $produit['categorie'] . "</a>";