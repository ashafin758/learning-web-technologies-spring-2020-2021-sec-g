<?php 
    $students = [
        0=> [
            'id'	=>1, 
            'name'	=>'mno', 
            'dept'	=>'SE', 
            'email'	=>'mno@aiub.edu'
        ],
        1=> [
            'id'	=>2, 
            'name'	=>'xyz', 
            'dept'	=>'CSSE', 
            'email'	=>'xyz@aiub.edu'
        ],
        2=> [
            'id'	=>3, 
            'name'	=>'klm', 
            'dept'	=>'CSE', 
            'email'	=>'klm@aiub.edu'
        ],
        3=> [
            'id'	=>4, 
            'name'	=>'efg', 
            'dept'	=>'ARCH', 
            'email'	=>'efg@aiub.edu'
        ]
    ];

    $n=readline("Enter the name to search: ");
    for($i=0;$i<4;$i++){
        if($n==$students[$i]['name']){
            echo('Student ID : '.$students[$i]['id']."\n");
            echo('Student Name : '.$students[$i]['name']."\n");
            echo('Depertment Name : '.$students[$i]['dept']."\n");
            echo('Student Email Address : '.$students[$i]['email']."\n");
        }
    }
?>