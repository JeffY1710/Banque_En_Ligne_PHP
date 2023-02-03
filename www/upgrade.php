<head>
    <link rel="stylesheet" href="../assets/maison.css">
    <title>Admin space</title>
</head>
<?php
require_once __DIR__ . '/../src/init.php';


if ($role == 100) {

	$errors = get_errors();

	$page_title = 'Upgrade';
	require_once __DIR__ . '/../src/partials/head.php'; ?>

	<body>
		<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
		<?php require_once __DIR__ . '/../src/pages/upgrade.php'; ?>
		<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
	</body>
<?php
} else {
	header('Location: /index.php');
	die();
}
?>