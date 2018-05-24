<?php

    class User{
        public $name;
        public $age;

        // Runs when an object is created or initiated
        public function __construct($name, $age)
        {
            //echo ' Constructor ran.. ';
            echo  ' Class' . __CLASS__ . ' instantiated '; //Magic constant
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello()
        {
            return $this->name . ' Says Hello ';
        }

        //Destructor will be called when no other references to a certain object
        // Is used for cleanup, closing connections, etc
        public function __destruct()
        {
            echo 'destructor ran..';
        }

    }

    $user1 = new User('Brad', 36);
    echo '<br>';
    echo $user1->name . ' is '. $user1->age . ' years old';
    echo '<br>';
    echo $user1->sayHello();

    echo '<br><br>';

    $user2 = new User(' Sara ', 25);
    echo '<br>';
    echo $user2->name . ' is '. $user2->age . ' years old';
    echo '<br>';
    echo $user2->sayHello();

