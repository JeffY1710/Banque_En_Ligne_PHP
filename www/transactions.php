<?php
require_once __DIR__ . '/../src/init.php';

$errors = get_errors();

$page_title = 'Login';
require_once __DIR__ . '/../src/partials/head.php'; ?>

<body>
	<?php require_once __DIR__ . '/../src/partials/menu.php'; ?>
	<?php require_once __DIR__ . '/../src/pages/transactions.php'; ?>
	<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>
</body>

</html>