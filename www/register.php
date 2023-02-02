<?php
require_once __DIR__ . '/../src/init.php';

if ($user_id) {
	header('Location: /index.php');
	die();
}

$errors = get_errors();

$page_title = 'Register TEST';
require_once __DIR__ . '/../src/partials/head.php'; ?>

<body>
	<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
	<?php require_once __DIR__ . '/../src/pages/register.php' ?>
	<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
</body>

</html>