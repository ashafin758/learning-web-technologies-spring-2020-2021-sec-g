<?php 
    require_once('../model/productModel.php');
    session_start();
    

        $id=$_SESSION['edit_id'];
    
        $status=deleteProduct($id);
        
        if($status==true){
            header('location: ../view/display.php');
        }else{
            
        }
?>