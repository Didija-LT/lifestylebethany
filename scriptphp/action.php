<?php

//action.php

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['ref_produit'] == $_POST["ref_produit"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['quantity'] = $_SESSION["shopping_cart"][$keys]['quantity'] + $_POST["quantity"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'ref_produit'       =>     $_POST["ref_produit"],  
					'name'             =>     $_POST["name"],  
					'prix'            =>     $_POST["prix"],  
					
					'quantity'         =>     $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'ref_produit'       =>     $_POST["ref_produit"],  
				'name'             =>     $_POST["name"],  
				'prix'            =>     $_POST["prix"],  
				
				'quantity'         =>     $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["ref_produit"] == $_POST["ref_produit"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
}

?>