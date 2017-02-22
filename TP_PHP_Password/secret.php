<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>
    <body>
		<?php
		if (isset($_POST['pass']) AND $_POST['pass'] == "koalalapine")
		{
			echo "SECRET PASSWORD TO ACTIVATE EXPLOSION: 8=> - - - (.)(.)";
		}
		else
		{
			echo '<p>Incorrect password, <a href="form.php">click here</a> to come back to the previous page</p>';
		}
		?>
	</body>
</html>