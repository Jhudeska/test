<!--/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 11/04/2018
 * Time: 17:35
 */ -->
<?php
//we want to redirect the user to the main if  he is already logged in
session_start();
if(isset($_SESSION['user'])) {
    header("Location:main.php");
}
?>

<html>
<head>
    <style>
        #login-controls{
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 50px;
            width: 300px;
        }

        .error-text{
            color: #f00;
        }
    </style>
</head>
<body>
<div id="login-controls">
    <h2>Login</h2>
    <!--show the error message if the controller sets err=1 in the url query string -->
    <?php if (@$_GET['err'] = 1) {?>
        <div class="error-text">Login incorrect. Please try again</div>
    <?php }?>
    <form method="POST" action="index.php">
        <p>Username: <br />
        <input type="text" name="user"/>
        </p>
        <p>Password: <br />
        <input type="password" name="pass"/>
        </p>
        <input type="submit" name="op" value="login"/>
    </form>
</div>
</body>
</html>