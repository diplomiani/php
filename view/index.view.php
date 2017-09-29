<!DOCTYPE html>
<html>
<head>
    <title>php</title>
</head>
<body>
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
</body>
</html>
