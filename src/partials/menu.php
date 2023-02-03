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
		<?php if ($user && $role>1) { ?>
			<li>
				<a href="/operation.php">operation</a>
			</li>
			<li>
				<a href="/admin.php">Admin</a>
			</li>
			<li>
				<a href="/users.php">Utilisateurs</a>
			</li>
		<?php } ?>
		<?php if ($user && $role == 100) { ?>
			<li>
				<a href="/upgrade.php">Upgrade user</a>
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