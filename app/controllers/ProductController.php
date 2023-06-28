<?php 
  /**
   * 
   */
  class ProductController 
  {
  	
  	  public function index()
  	  {
       $product= new Product();
         $product->GetUser();

       // Views::load('product/index');

  	  }
      public function add()
      {
       $product= new Product();

       Views::load('product/add');

      }
      public function store() //Get Data From Form 
      {
       $product= new Product();

         if (isset($_POST['submit'])) {
            $product->InsertProduct();
        

         }

      }
      public function Delete($id) // Delete Data From Table
      { 
           $product= new Product();
           $product-> DeleteProduct($id);
         Views::load('product/delete');

      }
      public function Edit($id)
      {
         $product= new Product();
          $product->EditTable($id);
         
   
         }
      }
 


?>