<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/maison.css">
    <title>N27 - Accueil</title>
</head>

<?php
require_once __DIR__ . '/../src/init.php';


if ($user_id === false) {
	header('Location: /login.php');
	die();
}


$page_title = 'Accueil';
require_once __DIR__ . '/../src/partials/head.php'; ?>

<body>
	<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
	<?php require_once __DIR__ . '/../src/pages/home.php'; ?>
	<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
</body>

</html>