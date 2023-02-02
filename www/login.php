<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/login.css">
    <title>Connectez-vous !</title>
</head>

<?php
require_once __DIR__ . '/../src/init.php';

if ($user_id) {
	header('Location: /index.php');
	die();
}

$errors = get_errors();

$page_title = 'Login';
require_once __DIR__ . '/../src/partials/head.php'; 
?>

<body>
	<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
	<?php require_once __DIR__ . '/../src/pages/login.php'; ?>
	<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
</body>

</html>