<!DOCTYPE html>
<html>
<head>
    <title>php</title>
</head>
<body>
    <ul>
        <li>
            <strong>Name:</strong><?= $task['name'] ?>
        </li>
        <li>
            <strong>Age:</strong><?= $task['age'] ?>
        </li>
        <li>
            <strong>Jobs:</strong><?= $task['job'] ?>
        </li>
        <li>
            <strong>Jobs Love:</strong><?= $task['loves_job'] ? 'yes' : 'no' ?>
        </li>
    </ul>
</body>
</html>
