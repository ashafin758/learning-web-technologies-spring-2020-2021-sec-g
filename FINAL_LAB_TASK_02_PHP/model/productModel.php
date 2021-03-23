<?php 
    require_once('db.php');


    function insertProduct($products){
        $conn = getConnection();
        $sql = "insert into products values('', '{$products['name']}', '{$products['buying_price']}', '{$products['selling_price']}', '' )";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            return true;
        }else{
            return false;
        }
    
    }

    function getAllUser(){

        $conn = getConnection();
        $sql = "select * from produts";
        $result = mysqli_query($conn, $sql);
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($products, $row);
        }
        return $products;
    }

?>