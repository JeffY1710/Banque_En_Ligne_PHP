<body style = "margin-bottom: 2.5%;
    font-family: Arial, Helvetica, sans-serif;
">
	<ul style="background-color: white;
		list-style-type: none;
  		margin: 0;
  		padding: 2.5%;
		background-color:white;
		padding: 20px;
		border-radius: 10px;
		text-align: center;
		margin-bottom: 5%;
		">
		<?php
		if ($user) {
			?>
			<li>
				<a href="/index.php"  style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Accueil</a>
					
			<?php if ($user && $verify != 1) { ?>
				
					<a href="/transactions.php"  style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Transactions</a>
					
			<?php } ?>
			<?php if ($user && $role == 10) { ?>
				
					<a href="/operation.php"  style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Opération</a>
					
					<a href="/admin.php"  style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Admin</a>
					
			<?php } ?>
			
			<?php
				if ($user) {
			?>
				<a href="/actions/logout.php"  style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Logout</a>

			<?php } ?>

		<?php } else { ?>
			<div class="nav">
				
					<a href="/login.php" style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;
					">Connexion</a>
					
					<a href="/register.php" style="
						color: black;
						margin-right: 50px;
						font-size: 20px;
						font-weight: bolder;
						text-decoration:none;">Créer un compte</a>
				</li>
			</div>
		<?php } ?>
	</ul>
</body>