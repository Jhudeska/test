<!--
 versie 1
class Person{
    public $name; //property
    public $age;

    public function __construct()  //constructed is automatically called when a instance is called.
    {
        echo 'Constructed';
    }

    public function sentence() {
        return $this ($person)->name . ' is ' . $this($person)->age . ' years old';
    }
}


class Person{ // versie 2
    public $name;
    public $age;

    public function __construct($name, $age)  //Inject things in the constructed
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sentence() {
        return $this->name . ' is ' . $this->age . ' years old';

-->

<?php

class Person{ // versie 2
    public $name;
    public $age;

    public function __construct($name, $age)  //Inject things in the constructed
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sentence() {
        return $this->name . ' is ' . $this->age . ' years old';
    }
}
