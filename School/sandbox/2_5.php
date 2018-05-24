<?php

    class User{

        private $name;
        private $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName(){
          return $this->name;

        }

        public function setName(){
            $this->name = $name;
        }
    }

    $user1 = new User('John', 40);

    //$user1->name = 'Jeff';
    //echo $user1->name;

    echo $user1->setName('Jeff');
    echo $user1->getName();

