<?php

include_once 'connexion.php';

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th width="35%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="15%">Price</th>  
            <th width="15%">Total</th>  
            <th width="5%">Action</th>  
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td>'.$values["name"].'</td>
			<td>'.number_format($values["quantity"]).'</td>
			<td align="right">$ '.$values["prix"].'</td>
			<td align="right">$ '.$values["quantity"] * $values["prix"].'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["ref_produit"].'">Remove</button></td>
		</tr>
		';
		$total_price = $total_price + (($values["quantity"]) * $values["price"]) ;
		$total_item = $total_item + 1;
	}
	$output .= '
	<tr>  
        <td colspan="4" align="right">Total</td> 
		
        <td align="right" >$ '.number_format($total_price, 2).'</td>  
         
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);


?>