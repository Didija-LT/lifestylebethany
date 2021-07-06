
<?php 

session_start();

include_once 'connexion.php';

?>
<div class="alert alert-success">
<?php
		         
				  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					  echo "Bonjour Mr , " . $_SESSION['username'] . "  Vous Etes connecté :) ";
				  } else {
					  echo " <h5 class='alert alert-warning>Merci de S'authentifié D'abord</h5>";
				  }
						?>
</div>

        <h1 align=center style="color:black;"> Market  </h1> 
		
			
		</div>
	
<?php
$query = "SELECT * FROM produit ";
$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-3" style="margin-top:20px; margin-left : 90px; ">  
            <div style="margin-left:20px;  border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
            	<img style="width:auto; height:90px;" src="'.$row["image"].'" class="img-responsive"  /><br />
            	<h4 class="text-info">'.$row["name"].'</h4>
            	<h4 class="text-danger">$ '.$row["prix"] .'</h4>
            	<input type="number" name="quantity" id="quantity' . $row["ref_produit"] .'" class="form-control" placeholder="quantité" value="1" />
				<input type="hidden" name="hidden_name" id="name'.$row["ref_produit"].'" value="'.$row["name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["ref_produit"].'" value="'.$row["prix"].'" />
                <input type="button" name="add_to_cart" id="'.$row["ref_produit"].'" style="margin-bottom:=0px;" class="btn btn-success form-control add_to_cart" value="Add to Cart " /> 
				</div>
        </div>
		';
        echo $output;
	}
	
}


?>
<script>

$(document).ready(function(){

	load_product();

	load_cart_data();
    
	function load_product()
	{
		$.ajax({
			url:"product.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

    function addtocart(){
        $.ajax({
			url:"panier.php",
			method:"POST",
            data:{ref_produit, name , prix},
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
    }

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var ref_produit = $(this).attr("id");
		var name = $('#name'+ref_produit+'').val();
		var prix = $('#price'+ref_produit+'').val();
		var product_shipping = $('#shipping'+ref_produit).val();
		var product_quantity = $('#quantity'+ref_produit).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{ref_produit:ref_produit, name:name, prix:prix, product_shipping:product_shipping, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Produit a été ajouter au panier");
				}
			});
		}
		else
		{
			alert("Merci De precisé la quantité ");
		}
	});

	$(document).on('click', '.delete', function(){
		var ref_produit = $(this).attr("id");
		var action = 'remove';
		if(confirm("Vous Voulez supprimer Ce produit ?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{ref_produit:ref_produit, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Produit Bien supprimé");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Ton Panier Est Vide");
			}
		});
	});
    
});


</script>
