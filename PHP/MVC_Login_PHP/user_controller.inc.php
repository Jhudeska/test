<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 11/04/2018
 * Time: 17:37
 */

class UserController {
    function UserController() //constructor
    {
        //constructor is empty for now
    }

    function create($username, $password, $email)
    {
        //creates user in the db
    }

    function login($username, $password)
    {
        //Checks against db, does login procedures
        if($this->authenticate($username, $password)) {
            //start the session for the user...
            session_start();
            //instantiate  the UserModel object
            $user = new UserModel($username);
            $_SESSION['user'] =  $user;
            //We tell the system that we authenticated the user
            return true;
        }   else{
            //We tell the system that we could not..
            return false;
        }
    }

    static function authenticated ($u, $p){
        $authentic = false;
        //check against db
        if ($u == 'admin' && $p == 'admin') $authentic = true;
        return $authentic;
    }
    function logout()
    {
        //does logout procedures
        session_start();
        session_destroy();
    }
}
?>