<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<!--
	
		This is not your form.
		But it will be submitted in the same way to your server as your form do.
		
	-->
	
	<form action="http://www.example.com/test.php" method="POST">
		Name : <input type="text" name="fm" maxlength="100"><br><br>
		Country : <select name="country">
			<option>MyCountry</option>
		</select><br><br>
		<input type="submit" value="Submit" name="fm_submit">
	</form>
	
</body>
</html>