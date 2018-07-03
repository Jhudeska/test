<!doctype html>
<?php
require_once '../common/setup.php';
require_once 'common/system/SESSION.php';

// setup menu
$items = [
    'home' => 'Home',
    'products' => 'Producten',
    'klanten-1' => 'Klanten',
    'klanten-2' => 'Klanten met verkoper',
    'verkopers-1' => 'Verkopers',
    'verkopers-2' => 'Verkopers met klanten',
];

// get view and action
$view = SESSION::get('view', 'home');
$action = SESSION::get('action', $view);
if (!isset($items[$view])) {
    $view = 'home';
}
$here = "view/${view}";
$content = "view/${view}/${action}";

// show it
?>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title><?= $items[$view] ?></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link type='text/css' rel='stylesheet' href='style/general.css'>
        <?php
        if (file_exists("{$here}/css/style.css")) {
            echo "<link type='text/css' rel='stylesheet' href='{$here}/css/style.css'>";
        }
        if (file_exists("{$here}/css/{$action}.css")) {
            echo "<link type='text/css' rel='stylesheet' href='{$here}/css/{$action}.css'>";
        }
        ?>

        <script src="/<?= BASE ?>/common/js/view.js"></script>
        <script src="/<?= BASE ?>/common/js/tablefilter.js"></script>

    </head>
    <body>
        <nav>
            <p><?= BASE ?> - <?= APP ?></p>
            <?php
            foreach ($items as $item => $title) {
                $class = $item == $view ? ' class="current"' : '';
                if ($item == 'home') {
                    echo "<button{$class} onclick='reset()'>{$title}</button>";
                } else {
                    echo "<button{$class} onclick='view(\"{$item}\")'>{$title}</button>";
                }
            }
            ?>
        </nav>
        <h2><?= $items[$view] ?></h2>
        <?php
        if (file_exists("{$content}.php")) {
            include "{$content}.php";
        } else {
            SESSION::clear('action');
            SESSION::clear('view');
            echo "<h2>404</h2><p>{$content} not found</p>";
        }
        ?>
        <form id="post" action="post.php" method="post">
            <input type="hidden" name="view">
        </form>
    </body>
</html>
