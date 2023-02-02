<head>
    <link rel="stylesheet" href="transac.css">
</head>

<?php
require_once __DIR__ . '/../src/init.php';


if ($role == 10) {

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