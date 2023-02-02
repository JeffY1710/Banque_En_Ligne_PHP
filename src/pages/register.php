<?php
	if ($errors !== false) {
		echo '<p>' . $errors . '</p>';
	} ?>
	<form action="/actions/register.php" method="post">
		Prénom : <input type="text" name="pseudo"><br>
		Email : <input type="text" name="email"><br>
		Password : <input type="password" name="password"><br>
		C.Password : <input type="password" name="cpassword"><br>
		<button type="submit">Register</button>
	</form>