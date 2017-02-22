<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Information protected by a password</title>
    </head>
	<body>
	<?php
		if (isset($_POST['pass']) AND $_POST['pass'] == "koalalapine")
		{
			echo '<h1>SECRET PASSWORD TO ACTIVATE EXPLOSION: 8=> - - - (.)(.)</h1>';
		}
		else
		{
	?>
		<h3>Welcome to the NASA Corporation Website administrated by RafInc.<br /><h3>
		<br /> <br />
		<h4>Please enter the password to access sensitive information:<h4>
		<form action="onepagepass.php" method="post">
			<input type="password" name="pass" />
			<input type="submit" value="Valider" />
		</form>
	<?php
	     }
	?>	 
	</body>
</html>