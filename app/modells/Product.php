<?php
 /**
  * 
  */
 class Product extends DB
 {
 	
 	function __construct()
 	{
 		 new DB();
 	}
 	public function GetUser()
 	{
 		$select="SELECT * FROM product";
 		$stmt=$this->connect()->prepare($select);
 		$stmt->execute();
 		 $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
         $data['viewProduct']=$stmt;
               Views::load('product/index',$data);

       
 	
 	}
    public function InsertProduct()
    {
        $InsertProduct="INSERT INTO product (Name,Price ,Discription ,Quantite) VALUES (:Name,:Price ,:Discription ,:Quantite)";
        $stmt=$this->connect()->prepare($InsertProduct);
        $stmt->bindparam("Name",$_POST['Name']);
        $stmt->bindparam("Price",$_POST['Price']);
        $stmt->bindparam("Discription",$_POST['Discription']);
        $stmt->bindparam("Quantite",$_POST['Quantite']);
            if ($stmt->execute()) {

             $data['sucees']="Data Succesfull";
         // echo "<script> window.open('".BURL."product/add','_self')</script>";

          
        }
        else
        {
            $data['error']="Data is Fail";
        }
           Views::load('product/add',$data);
    }
    public function DeleteProduct($id)
    {  

       $DeleteProduct="DELETE FROM product WHERE id=:id";
        $id=implode($id,"/");
       $stmt=$this->connect()->prepare($DeleteProduct);
       $stmt->bindparam("id",$id);
       $stmt->execute();
    
    }
    public function EditTable($id)
    {
        $GetData="SELECT * FROM product WHERE id=:id";
     $id=implode($id,"/");
       $stmt=$this->connect()->prepare($GetData);
       $stmt->bindparam("id",$id);
       $stmt->execute();
       $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
       $data['GetRow']=$stmt;
        Views::load('product/edit',$data);

    }
 }

?>