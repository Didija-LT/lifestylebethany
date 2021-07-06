$(document).ready(function(){

	load_product();

	load_cart_data();
    
	function load_product()
	{
		$.ajax({
			url:"fetch_item.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"panier.php",
			method:"POST",
			dataType:"",
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
		var product_name = $('#name'+ref_produit+'').val();
		var product_price = $('#price'+ref_produit+'').val();
		
		var product_quantity = $('#quantity'+ref_produit).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{ref_produit:ref_produit, product_name:product_name, product_price:product_price, product_shipping:product_shipping, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("produit bien ajouter au panier");
				}
			});
		}
		else
		{
			alert("Merci de choisir la quantité");
		}
	});

	$(document).on('click', '.delete', function(){
		var ref_produit = $(this).attr("id");
		var action = 'remove';
		if(confirm("vous voulez supprimer ce produit ?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{ref_produit:ref_produit, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("produit a été bien supprimé");
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
				alert("ton panier est vide");
			}
		});
	});
    
});
