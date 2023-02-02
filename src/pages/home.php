<div>
	Welcome
	<?php echo $user['prenom']; ?><br>
	<?php
	if ($verify == 1) {
		echo "<p>Votre compte est en attente de validation</p>";
	}
	?>
</div>