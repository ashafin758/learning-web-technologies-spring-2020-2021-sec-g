<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
</head>
<body>
	<form method="post" action="../controller/addCheck.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td> <br>
					<td><input type="text" name="product_name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price</td> <br>
					<td><input type="text" name="buying_price" value=""></td>
				</tr>
				<tr>
					<td>Selling Price</td> <br>
					<td><input type="text" name="selling_price" value=""></td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="display" value=""> Display
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="save" value="Save">
					</td>
				</tr>
			</table>
		</fieldset>
		
	</form>
</body>
</html>