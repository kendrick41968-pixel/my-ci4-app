<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($heading) ?></h1>

    <p><?= esc($message) ?></p>

    <a href="<?= base_url('/') ?>">Return to Home</a>
	
	<nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('about') ?>">About</a> |
    <a href="<?= base_url('customers') ?>">Customers</a> |
    <a href="<?= base_url('users') ?>">Users</a>
</nav>
	
</body>
</html>