<?php

	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];
		$password	=  $_POST['password'];
		if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $name) && strlen($name)>=2 ) {
           
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%') && $pass<8){
                echo $name."<br>";
                echo $pass;
            }
            else {
                echo "must contain 8 char and contain at least one of the special characters (@, #, $, %)";
            }
        }
        else {
            echo"must contain alpha numeric and '_' and contain atleat 2 character";
        }
		
	}
?>


<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>LOGIN</legend>
			Name: 		<input type="text" name="myname" value=""> <br>
			password: 	<input type="password" name="password" value=""> <br>
						<input type="checkbox"><label for="">Remember Me</label> <br>

						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>