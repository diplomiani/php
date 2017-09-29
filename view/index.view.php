<?php require 'partials/head.php'; ?>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->complated): ?>
                    <strike><?= $task->descriptions;?></strike>
                <?php else: ?>
                    <?= $task->descriptions;?>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
<?php require 'partials/footer.php'; ?>
