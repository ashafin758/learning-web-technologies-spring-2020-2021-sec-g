<?php 

    $first=readline('enter first number: ');
    $second=readline('enter second number: ');
    $third=readline('enter third number: ');

    if($first>$second && $first>$third){
        echo($first.' is the largest');
    }
    elseif($second>$first && $second>$third){
        echo($second.' is the largest');
    }
    elseif($third>$first && $third>$second){
        echo($third.' is the largest number');
    }
    
?>