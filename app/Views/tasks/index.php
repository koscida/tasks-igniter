<h2><?= esc($title) ?></h2>

<?php if ($tasks_list !== []): ?>

    <?php foreach ($tasks_list as $task_item): ?>

        <h3><?= esc($task_item['name']) ?></h3>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
