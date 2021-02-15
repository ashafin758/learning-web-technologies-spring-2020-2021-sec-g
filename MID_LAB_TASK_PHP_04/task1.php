<?php 

    $length=readline('length: ');
	
    $width=readline('width: ');
    
    $area = ($length*$width);
	
    $perimeter = 2*($length+$width);

    echo('area of triangle: '.$area."\n");
    
    echo('perimeter of triangle: '.$perimeter."\n");
	
?>