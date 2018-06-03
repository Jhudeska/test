<?php

$tasks = $database->selectAll('todos');

require '../MVC/Views/index.view.php';