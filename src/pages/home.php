<div>
	<h2 style="text-align: center;
	margin-left: 35%;
	padding-top: 2%;
	padding-bottom: 2%;
	border-radius: 25px;
	width: 30%;
	background-color: white;"> Welcome
		<?php echo $user['prenom']; ?>
	! </h2><br>
	<?php
	if ($verify == 1) {
		echo "<h2 style='text-align: center'>Votre compte est en attente de validation</h2>";
	}

	if ($verify == 2) {
		echo "<h2 style='text-align: center'>Votre compte à été vérifié</h2>";
	}
	?>
</div>