 <?php

          include_once "lib/php/functions.php";
          include_once "parts/templates.php";

          $cart = getCart();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	 <div class="container">
<div class="card">
		<h2>IN YOUR CART</h2>

<?php

if(count($cart)){
	?>
<div class="grid gap">
	<div class="col-xs-12 col-md-8">
	<div class="card soft flat">
		<?= array_reduce(getCartItems(), 'cartListTemplate') ?>
	</div>
	</div>
	
	<div class="col-xs-12 col-md-4">
	<div class="card soft flat">
	<?= cartTotals() ?>
      <div class="card-section">
                  <a href="product_checkout.php" class="form-button">Checkout</a>
               </div>

	</div>
</div>
</div>
	
<?php 

} else{
	?>
	<div class="card soft">
		<p>No item in your cart</p>
	
    	</div>
<div class="card soft">

        <h3>Other Recommendations</h3>      
        <?php  recommendedAnything(6); ?>
     </div>
  

	
	<?php

}
?>

</div>

	</div>
<?php 
include "parts/footer.php";
 ?>
</body>
</html>