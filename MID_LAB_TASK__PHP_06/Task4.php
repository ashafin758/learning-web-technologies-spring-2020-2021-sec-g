<?php

	if(isset($_POST['submit'])){

		$name 				=  $_POST['myname'];
		$email 				=  $_POST['email'];
		$user_name 			=  $_POST['uname'];
		$password			=  $_POST['password'];
		$Confirm_password	=  $_POST['cpassword'];
		$gender				=  $_POST['gender'];

		
	}
?>


<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>REGISTRATION</legend>
			Name: 				<input type="text" name="myname" value=""> <br>
			Email: 				<input type="email" name="email" value=""> <br>
			User Name: 			<input type="text" name="uname" value=""> <br>
			password: 			<input type="password" name="password" value=""> <br>
			Confirm password: 	<input type="cpassword" name="cpassword" value=""> <br>
			Gender:				<input type="radio" name="gender" /> Male
								<input type="radio" name="gender" /> Female
								<input type="radio" name="gender" /> Other <br>
			DOB:				<input type="date" name="dob" /> <br>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="click" value="reset">
		</fieldset>
	</form>
</body>
</html>