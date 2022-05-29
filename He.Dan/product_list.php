
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
  <?php include "parts/navbar.php"; ?>

  <script src="lib/js/functions.js"></script>
  <script src="js/templates.js"></script>
  <script src="js/product_list.js"></script>


</head>
<body>


	 <div class="container">
      <h2>Product List</h2>

	        <div class="form-control">
           <form class="hotdog light" id="product-search">
             <input type="search" placeholder="Search Products">
           </form> 
          </div>

              <div class="form-control">

                <div class="card soft">
                <div class="display-flex flex-wrap">
                  <div class="flex-stretch display-flex">
               <div class="flex-none">
                <button class="form-button2" data-filter="category" data-value="product" type="button">Product</button>
              </div>
                <div class="flex-none">
                <button class="form-button2" data-filter="category" data-value="device" type="button">Device</button>
              </div>
                <div class="flex-none">
                <button class="form-button2" data-filter="category" data-value="" type="button">All</button>
              </div>
                            </div>
              <div class="flex-none">
              <div class="form-select">
              <select class="js-sort">
                <option value="1">Newest</option>
                <option value="2">Oldest</option>
                <option value="3">Lowest Price</option>
                <option value="4">Highest Price</option>      </select>
                  </div>
                  </div>
                  </div>
                  </div>
            </div>


            <div class='productlist grid gap'></div>
            
             </div>

               </div>
<?php include "parts/footer.php"; ?>
</body>
</html>
