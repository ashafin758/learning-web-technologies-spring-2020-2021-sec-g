<?php 

    for($i=0;$i<4;$i++){
        for($j=0;$j<$i;$j++){
            echo('*');
        }
        echo("\n");
    }

    echo"\n";
    
    for($i=3;$i>=1;--$i){
        for($j=1;$j<=$i;++$j){
            echo($j);
        }
        echo("\n");
    }

    $alpha='A';
    for($i=0;$i<4;$i++){
        for($j=0;$j<$i;$j++){
            echo($alpha++);
        }
        echo("\n");
    }
?>