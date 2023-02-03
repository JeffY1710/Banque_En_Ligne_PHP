<?php
    if ($errors !== false) {
		echo '<p>' . $errors . '</p>';
	} ?>

    <form action="/actions/upgrade.php" method="post">
        Selectionnez un role a attribuer : <select name="selecteur">
            <option name="manager">manager</option>
            <option>admin</option>
            <option>user</option>
        </select><br>
        Entrez l'email du destinataire:<input type="text" name="mail_destinataire"><br>
        <button type="submit">Changer</button>
    </form>