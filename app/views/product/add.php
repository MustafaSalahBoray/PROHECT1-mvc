<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost/PROJECTS%20MVC/PROHECT1/public/Library/css/bootstrap.min.css">
	<script type="text/javascript" src="http://localhost/PROJECTS%20MVC/PROHECT1/public/Library/js/bootstrap.min.js">
		
	</script>
	<script type="text/javascript" src="http://localhost/PROJECTS%20MVC/PROHECT1/public/Library/js/jquery-3.6.1.min.js">
		
	</script>

	<title>ADD Product</title>
</head>
<body>
   <?php require 'inc/Navbar.php';?>
   <div class="container">
   	  <div class="row">
   	  	<div class="col-md-10 mx-auto p-4 border mt-5" >
   	  		<?php 
   	  		 if (isset($sucees)) {
   	  		 	echo '<h3 class="alert alert-success text-center">'.$sucees.'</h3>';
   	  		 }
   	  		  if (isset($error)) {
   	  		 	echo '<h3 class="alert alert-danger text-center">'.$error.'</h3>';
   	  		 }
   	  		?>
  <h3 class="text-center p-3  bg-primary text-white">Add Products</h3>
               <form method="POST" action="<?php echo url('product/store')?>" >
         <div class="form-group">
            <label for="Name" >Name</label>
            <input type="text" name="Name" class="form-control">
         </div>
       <div class="form-group">
            <label for="Price" >Price</label>
            <input type="text" name="Price" class="form-control">
         </div><div class="form-group">
            <label for="Discription" >Discription</label>
            <input type="text" name="Discription" class="form-control">
         </div>
         <div class="form-group">
            <label for="Quantite" >Quantite</label>
            <input type="text" name="Quantite" class="form-control">
         </div>
         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>

   	  	</div>
   	  </div>
   </div>
</body>
</html>