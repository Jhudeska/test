<!--/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 11/04/2018
 * Time: 17:36
 */-->
<?php
require_once('user_model.inc.php');
//we want to redirect the user to the main if  he is already logged in
session_start();
if(isset($_SESSION['user'])) {
    header("Location:main.php");
} else {
    $user = $_SESSION['user'];

}
?>
?>
<html>
<head>
    <body>
        <p>
            You are now logged in
            ... this is the main.
            <a href="index.php?op=logout">Logout</a> <?php print $user-> get_username()?>
        </p>
    </body>
</head>
</html>

