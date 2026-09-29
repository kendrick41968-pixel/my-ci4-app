<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
</head>
<body>

<nav>
    <a href="<?= base_url('/') ?>">Today</a> |
    <a href="<?= base_url('tasks') ?>">All Tasks</a> |
    <a href="<?= base_url('profile') ?>">Profile</a> |
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<h1><?= esc($title) ?></h1>

<?php foreach ($tasks as $task): ?>
    <div>
        <h3><?= esc($task['title']) ?></h3>
        <p>Status: <?= esc($task['status']) ?></p>
        <p>Date: <?= esc($task['task_date']) ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>