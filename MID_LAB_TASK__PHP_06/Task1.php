<?php

	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];
		$password	=  $_POST['password'];

		
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