<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" href="../css/style.css" rel="stylesheet">
    <title> All about the view </title>

</head>
<body>


<header>
    <h1>My To do list</h1>

 <?php include 'partials/nav_top.php' ?>

</header>

<ul>
    <?php foreach($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>




</body>
</html>
