<?php 
    require_once('../model/productModel.php');

   if(isset($_POST['submit'])){

		$name 	= $_POST['product_name'];
		$bprice 	= $_POST['buying_price'];
		$sprice 		= $_POST['selling_price'];

		if($name == "" || $bprice == "" || $sprice == ""){
			echo "null value found...";
		}else{
			

				$products = [	
							'name'	=> $name, 
							'bprice'=> $bprice, 
							'sprice'=>$sprice, 
						];
				
				$status = insertProduct($products);				

				if(isset($_POST['display'])){
					header('location: ../view/display.php');
				}else{
					
				}

			}
		
	}

?>