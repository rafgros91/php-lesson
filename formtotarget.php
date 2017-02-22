<h3>This page contains only HTML.<br />
 </h3>

<form action="target.php" method="post">
    <p>
	    Please type your first name:
        <input type="text" name="prenom" />
	    <br /> <br />
	    Please type your message:<br />
	    <textarea name="message" rows="8" cols="45"></textarea>
		<br /> <br />
		Select your favorite food:
		<select name="choix">
            <option value="Hamburger">Hamburger</option>
            <option value="Pasta">Pasta</option>
            <option value="Pizza" selected="selected">Pizza</option>
            <option value="Tacos">Tacos</option>
        </select>
	    <input type="submit" value="Valider" />
    </p>
</form>

