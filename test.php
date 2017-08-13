<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<!--
		This is a php file which contains some session variables i.e. user information.

		It gives the user to select the country name USA, UK, Canada or Australia and you can not set 'MyCountry'.

		Bad person wants to send 'MyCountry' and also wants session information.

		Note: The form is to be submitted to action="http://www.example.com/test.php".

		Instead of using your form, he will create a form e.g form.php where the same form with different select field with the same action.
	
		He will be successful if you do not validate your form before submitting.
	-->

	<form action="http://www.example.com/test.php" method="POST">
		Name : <input type="text" name="fm" maxlength="10"><br><br>
		Country : <select name="country">
			<option>USA</option>
			<option>UK</option>
			<option>Canada</option>
			<option>Australia</option>
		</select><br><br>
		<input type="submit" value="Submit" name="fm_submit">
	</form>

	<?php
		if(isset($_POST['fm_submit']))
		{
			echo $_POST['fm'] . "<br>";
			echo $_POST['country'] . "<br>";
			
		}
	?>
	
</body>
</html>