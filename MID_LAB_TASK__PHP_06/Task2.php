<?php

	if(isset($_POST['submit'])){

		$current_password 		=  $_POST['current_password'];
		$new_password			=  $_POST['new_password'];
		$retype_New_password	=  $_POST['retype_New_password'];
		
		if ($current_password!=$new_password && $new_password==$current_password) {
            echo"successfully changed";
        }
        else{
            echo"new password shold not be the same as the current password ";
        }
		
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
			Current password: 		<input type="password" name="current_password" value=""> <br>
			New password: 			<input type="password" name="new_password" value=""> <br>
			Retype New password: 	<input type="password" name="retype_New_password" value=""> <br>
									<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>