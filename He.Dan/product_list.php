<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>


</head>
<body>
	<?php include "parts/navbar.php"; ?>

	 <div class="container">
	 	<div class="card soft">
	 		<h2>Product List</h2>
	 		<ul>
	 			<li><a href="product_item.php?id=1">Product 1</a></li>
	 			<li><a href="product_item.php?id=2">Product 2</a></li>
	 			<li><a href="product_item.php?id=3">Product 3</a></li>
	 			<li><a href="product_item.php?id=4">Product 4</a></li>
	 		</ul>
	 	</div>
	 	
        <h3>Product Grid</h3>
        <div class="grid gap">
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>3.99</div>
                    </figcaption>
                </figure>   
            </div>
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>3.99</div>
                    </figcaption>
                </figure>   
            </div>
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>3.99</div>
                    </figcaption>
                </figure>   
            </div>
        </div>
	 </div>
</body>
</html>