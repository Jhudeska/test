<!-- https://www.youtube.com/watch?v=ipp4WPDwwvk&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla

//Booleans
//Integers
//Floating point numbers
//Strings
//Arrays
//Objects
// Resources = file handle
//NULL
//Callbacks = is a call of an function


How to use an class?

//Objects

$object = new stdClass();
$object ->name = 'John'; //( a property is an variable)

echo $object ->name;


//Array
$object = new stdClass();
$object ->names = ['John', 'Billy', 'Susan', 'Max']; //( variable)

foreach ($object ->names as $name) {
    echo $name . '<br>';
}


// PHP Notation without OOP
$name = 'John';
$age = 20;

echo $name . ' is ' . $age . ' years old';


//PHP Notation with OOP
$person = new Person;
$person->name = 'John';
$person->age = 20;

echo $person->name . ' is ' . $person->age . ' years old';



 //PHP Notation with an method = (function)

 index_php versie 1
require_once 'Person.php';


$person = new Person;
$person->name = 'John';
$person->age = 20;

echo $person->sentence();



//Constructed injection
// versie 2
require_once 'Person.php';


$person = new Person ('John', 20);

echo $person->sentence();



-->




<?php
// versie 2
require_once 'Person.php';


$person = new Person ('John', 20);

echo $person->sentence();

