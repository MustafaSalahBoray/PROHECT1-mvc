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

	<title>Product</title>
</head>
<body>
   <?php require 'inc/Navbar.php';?>
   <div class="container">
   	  <div class="row">
   	  	<div class="col-md-10 mx-auto p-4 border mt-5" >
   	  		<?php 
   	  		 if (isset($sucess)) {
   	  		 	echo '<h3 class="alert alert-success text-center">'.$sucess.'</h3>';
   	  		 }
   	  		  if (isset($error)) {
   	  		 	echo '<h3 class="alert alert-danger text-center">'.$error.'</h3>';
   	  		 }
   	  		?>
  <h3 class="text-center p-3  bg-primary text-white">View all Products</h3>

   	  <table class="table table-dark " >
     <thead>
    <tr class="text-center">
      <th scope="col" >#</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">Discription</th>
      <th scope="col">Quantite</th>
      <th scope="col"></th>


    
    </tr>
  </thead>
  <tbody>
    <?php 
     
    $x=1;  
    foreach ($viewProduct as $key ) {
    	
        ?>
      
     <tr class="text-center bg-light text-secondary">
      <td scope="row"><?php echo $x;?></td>
      <td class="text-center"><?php echo $key['Name']?></td>
      <td class="text-center"><?php echo $key['Price'];?></td>
      <td class="text-center"><?php echo  $key['Discription'];?></td>
      <td class="text-center"><?php echo $key['Quantite'];?></td>
     <td class="text-center">
         <form method="POST"> <a href="<?php echo  url('product/edit/'.$key['id']);?>" name="edit" class="btn btn-info">Edite</a>
            <a href="<?php echo url('product/delete/'.$key['id']);?>"  class="btn btn-danger">Delete</a> </form>
          <?php $x++;}?>
     </td>
    </tr>

    <?php $x++; ?>
  </tbody>
</table>
   	  	</div>
   	  </div>
   </div>
</body>
</html>