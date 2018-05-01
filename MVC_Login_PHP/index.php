<!--/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 11/04/2018
 * Time: 17:36
 */-->

<?php
require_once('user_controller.inc.php');
require_once ('user_model.inc.php');

//in this simple example, we assume that we have user records
//in the db already so we are just going to demonstrate the
//login/authenticate and logout functions

@$op = $_REQUEST['op'];

$user_controller = new UserController();
switch ($op) {
    case 'login':
        //here we exspect username and password we submit the
        //validation for now
        $username = $_POST['user'];
        $password = $_POST['pass'];

        if $user_controller->login($username, $password)) {
        header ("Location:main.php");
        } else header("Location:login.php?err=1");
        break;

    case 'logout':
        $user_controller->logout();
        header("Location:login.php");
        break;

    default:
        header("Location:login.php");
}


?>