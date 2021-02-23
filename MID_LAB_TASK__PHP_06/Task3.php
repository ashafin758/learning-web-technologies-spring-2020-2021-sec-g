<?php

	if(isset($_POST['submit'])){

		
		$Picture	=  $_POST['image'];

		
	}
?>

<html>
	<head>
		<title> HTML Form Profie Pic</title>
	</head>
	<body>
		<form>
		<fieldset>
			<legend>PROFILE PICTURE</legend>
			
			
			Picture <input type="file" name="image" /> <br>
				<input type="submit" name="click" value="submit">
		</fieldset>
		</form>
	</body>
	
</html>