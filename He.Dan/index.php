<?php
include "lib/php/functions.php";
include "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<?php include "parts/meta.php"; ?>
	<title>eNest</title>
</head>
<body class="flush">
	<?php include "parts/navbar.php"; ?>
	
      <div class="view-window" style="background-image: url('https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
      </div>

                 <div class="container">
        <div class="bottom card soft">
    <h2>Make Your Home Smart</h2>
       <h3>Lastest Products</h3> 
       <?php  recommendedCategory("product"); ?>
</div>
    </div>





<?php include "parts/footer.php"; ?>
</body>

</html>

