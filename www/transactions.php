<head>
    <link rel="stylesheet" href="../assets/transac.css">
</head>

<?php
require_once __DIR__ . '/../src/init.php';


if ($user) {

	$errors = get_errors();

	$page_title = 'Transaction';
	require_once __DIR__ . '/../src/partials/head.php';
	?>

	<body>
		<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
		<?php require_once __DIR__ . '/../src/pages/transactions.php'; ?>
		<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
	</body>
<?php
} else {
	header('Location: /index.php');
	die();
}
?>