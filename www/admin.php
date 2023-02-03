<?php
require_once __DIR__ . '/../src/init.php';


if ($role >= 10) {

	$page_title = 'Admin';
	require_once __DIR__ . '/../src/partials/head.php'; ?>

	<body>
		<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
		<?php echo ("<p>Accédez à toutes les demandes de vérifications : </p>"); ?>
		<?php require_once __DIR__ . '/../src/pages/admin.php'; ?>
		<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
	</body>
<?php
} else {
	header('Location: /index.php');
	die();
}
?>