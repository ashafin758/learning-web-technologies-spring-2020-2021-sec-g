<?php

	if(isset($_POST['submit'])){

		$Current password 		=  $_POST['cu_password'];
		$New password			=  $_POST['new_password'];
		$Retype New password	=  $_POST['re_password'];

		
	}
?>


<html>
<head>
	<title>Password Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			Current password: 		<input type="password" name="cu_password" value=""> <br>
			New password: 			<input type="password" name="new_password" value=""> <br>
			Retype New password: 	<input type="password" name="re_password" value=""> <br>
									<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>