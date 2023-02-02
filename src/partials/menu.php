<ul>
	<?php
	if ($user) {
		?>
		<li>
			<a href="/index.php">Accueil</a>
		</li>
		<li>
			<a href="/actions/logout.php">Logout</a>
		</li>
		<?php if ($user && $verify != 1) { ?>
			<li>
				<a href="/transactions.php">Transactions</a>
			</li>
		<?php } ?>
	<?php } else { ?>
		<li>
			<a href="/login.php">Login</a>
		</li>
		<li>
			<a href="/register.php">Register</a>
		</li>
	<?php } ?>
</ul>