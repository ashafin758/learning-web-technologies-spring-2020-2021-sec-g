<?php 
    require_once('../model/productModel.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['product_name'];
        $bprice=$_POST['buying_price'];
        $sprice=$_POST['selling_price'];

        $id=$_SESSION['edit_id'];

        $product = [	
            'name'	=> $name, 
            'bprice'=> $bprice, 
            'sprice'=>$sprice, 
            'id' => $id
        ];
        updateProduct($product);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
       
    }

?>