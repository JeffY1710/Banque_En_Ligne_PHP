<?php

require_once __DIR__ . '/../../src/init.php';




if (!isset($_POST['email'], $_POST['pseudo'], $_POST['password'], $_POST['cpassword'])) {
	set_errors('Pas de formulaire recu', '/register.php');
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	set_errors('Email invalide', '/register.php');
}

if (empty($_POST['pseudo']) || strlen($_POST['pseudo']) > 100) {
	set_errors('Fullname invalide', '/register.php');
}

if (empty($_POST['password']) || ($_POST['password'] !== $_POST['cpassword'])) {
	set_errors('Mot de passe invalide', '/register.php');
}

$quer = $db->prepare('SELECT email FROM users WHERE email = ?');
$quer->execute([$_POST['email']]);
$quer->setFetchMode(PDO::FETCH_ASSOC);
$Email = $quer->fetch();



$_POST['pseudo'] = htmlentities($_POST['pseudo'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5);
$_POST['password'] = hash('sha256', $_POST['password']);

// retirer cpassword de $_POST
unset($_POST['cpassword']);

// DEBUG
// var_dump($_POST);
// die();

$admin_emails = ["mathiszerari@icloud.com", "jeff.yabas@gmail.com", "tac@gmail.com"];

foreach ($admin_emails as $email) {
	if ($_POST['email'] == $email) {
		$query = $db->prepare('INSERT INTO users (prenom, email, password, role, verified) VALUES(:prenom, :email, :password, :role, :verified)');
		$query->execute(
			[
				'prenom' => $_POST['pseudo'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				'role' => 10,
				'verified' => 2,
			]
		);
		$_SESSION['user_id'] = $db->lastInsertId();

		header('Location: /register.php');
		die();
	}
}

if ($Email !== false) {
	set_errors('Email already taken', '/register.php');
} else {
	$query = $db->prepare('INSERT INTO users (prenom, email, password) VALUES(:prenom, :email, :password)');
	$query->execute(
		[
			'prenom' => $_POST['pseudo'],
			'email' => $_POST['email'],
			'password' => $_POST['password']
		]
	);
}






// bonus : si on veut connecte l'utilisateur immediatement
$_SESSION['user_id'] = $db->lastInsertId();

header('Location: /register.php');