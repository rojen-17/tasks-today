<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Tasks for Today</h1>

<p>Today is: <?= esc($today) ?></p>

<?php if (empty($tasks)): ?>

    <p>No tasks scheduled for today.</p>

<?php else: ?>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?= esc($task['title']) ?></strong>
                -
                <?= esc($task['status']) ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

</body>
</html>