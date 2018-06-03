<?php


////////////////
//// Introduction to variable 
///////////////


$greeting =  'Hello World';
echo $greeting . '<br>';

$name = 'Jhudeska';
echo "Hello,  {$name}"; // defining this is an {} varible.


echo $greeting .',' .$name;




//////////////////
/////////
/////////////////

?>
<!-- -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Document for Testing</title>

<style>
	header{
		background: #e3e3e3;
		padding: 2em;
		text-align: center;

	}

    .icon{
        margin: 10px;
    }
</style>
</head>
<body>

	


	<header>
		<h1>
			<?php 

			// Get name form url //localhost:8888/?name=John 
			$name = $_GET['name']; 
			echo 'Hello, ' . $name;
			?>
			</h1>

		<!-- Het kan op een kortere manier-->
		<!-- User injection url  localhost:8888/?name=<a%20href="http://google.com">Jeffrey<a/> ( security) -->
		<h1><?php echo 'Hello, ' . $_GET['name']?></h1>



		<!-- Function  example: nameOfTheFunction(); 
			 Because of htmlspecialchars user is unable to parse code to the browser
			 url/?key=value
		-->
		<h1><?= 'Hello, ' . htmlspecialchars($_GET['name']); ?></h1>



		

	</header>

    <?php
    $names = [
    'Jeff',
    'John',
    'Mary'
    ];

    foreach($names as $name){
    echo $name . ', ';
    }?>


    <ul>

        //Normal notation for looping in an Array
        <?php
        foreach ($names as $name)

            echo "<li>$name</li>";
        ?>

        //Shorthand notation
        <?php foreach ($names as $name) : ?>

            <li><?= $name; ?></li>
        <?php endforeach; ?>
    </ul>

    //////////////////
    ///////// Task for The day
    /////////////////

    <?php
    $task = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Jhudeska',
    'completed' => true
    ]; ?>


    <!-- Task of the day -->
    <h1>Task For The Day</h1>
    <?= ucwords('hello myy name is Jhudeska') ?>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>

            <li>
                <strong><?= ucwords($heading) ?></strong> <?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <!-- This is how you can control label of data from db of json  -->
    <ul>
        <li>
            <strong>Name:</strong><?=$task['title']; ?>
        </li>
        <li>
            <strong> Due Date:</strong><?=$task['due']; ?>
        </li>
        <li>
            <strong>Personal Responsible:</strong><?=$task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status:</strong><?=$task['completed']; ?>
        </li>
    </ul>


    <!-- This is how you can control label of data from db of json  -->
    <ul>
        <li>
            <strong>Name:</strong><?=$task['title']; ?>
        </li>
        <li>
            <strong> Due Date:</strong><?=$task['due']; ?>
        </li>
        <li>
            <strong>Personal Responsible:</strong><?=$task['assigned_to']; ?>
        </li>
        <li>



            <!-- Ternary Operator (short hand notation for an if else statement)-->
            <strong>Status:</strong><?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
        </li>

        <li>
            <!-- Ternary Operator (long  notation for an if else statement)-->
            <strong>Status1:</strong>


            <?php
            if ($task ['completed']) {
                //echo 'Finshed';
                echo '<span class = "icon">&#9989; Finish</span>';
            }else {
                echo 'Incomplete';
            }
            ?>
        </li>


        <?php if ($task['completed']) : ?>
            <span class = icon> &#x2716; Incompleted</span>

    </ul>

-----------------------------------------------

    //////////////////
    ///////// Functions
    /////////////////
    $animals =['dog', 'cat'];


    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';

------------------------------------------------------------------

    function dumper($one, $two, $three){
    var_dump($one, $two, $three);
    }

    dumper('hello', 'big', 'world');


    // for reusable function see functions.php
    //dd = die dump ( code )
    //dd( $animals);
    dd( 'hello, mijn naam is Jhudeska');


    //Create an function that verify has the age to enter the night club
    //if(ageVisitor(15)){
    // echo 'You are not old enough.';
    //}else{
    //echo 'Please enter the nightclub.';
    // }

------------------------------------------------------------------
    <!-- Task of the day -->
    <h1>Task For The Day</h1>
    <?= ucwords('hello myy name is Jhudeska') ?>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>

            <li>
                <strong><?= ucwords($heading) ?></strong> <?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <!-- This is how you can control label of data from db of json  -->
    <ul>
        <li>
            <strong>Name:</strong><?=$task['title']; ?>
        </li>
        <li>
            <strong> Due Date:</strong><?=$task['due']; ?>
        </li>
        <li>
            <strong>Personal Responsible:</strong><?=$task['assigned_to']; ?>
        </li>
        <li>
            <!-- Ternary Operator (short hand notation for an if else statement)-->
            <strong>Status:</strong><?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
        </li>

        <li>
            <!-- Ternary Operator (long  notation for an if else statement)-->
            <strong>Status1:</strong>
            <?php
            if ($task ['completed']) {
                //echo 'Finshed';
                echo '<span class = "icon">&#9989</span>';
            }else {
                echo 'Incomplete';
            }
            ?>
        </li>
    </ul>

----------------------------------------------------------------------------------------

<?php

require 'functions.php';

//Todo Application
// Todo, Comment, User

class Task{

    // define here properties
    // public, protected and privated defines the visability of a property
    protected $description;

    protected $completed = false;




    public function __construct($description)
    {
        // Automatically triggered  on instantiation
        // the '->description' below refers to the instance '' description of the task

        $this->description = $description;

    }


    public function complete()
    {
        $this->completed = true;
    }



    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }


}




/* this is just  one object example.*/

$task = new Task( 'Go to the Store'); // a new task object
//dd($task);
//$task->complete(); // complete the task
//var_dump($task->isCompleted());



/* Array */

$tasks = [
    new Task( 'Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')

];

dd($tasks);

?>


----------------------------------------------------------

    //This function will verify the age of the Visitor
    function ageVisitor(){


    }

---------------------------------------------------
<?php

require '../MVC/Model/Task.php';



class Database{



    //Function to connect to database
    public function connectToDb(){
        try {

            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'root');
        } catch (PDOException $e) {
            //die('Could not connect.');
            die($e->getMessage());
        }
    }




}


$pdo = connectToDb();


public function fetchAllTasks($pdo){

    $statement = $pdo->prepare('SELECT * FROM todos');

// all data in variable '$statement' will be executed.
    $statement->execute();

//Insert all fetch data from database in $tasks
//$tasks = $statement->fetchAll(PDO::FETCH_OBJ); //fetchstyle: object
    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


//Fetch description result in the first row
//var_dump($tasks[0]->description);


}


=-----------------------------------------------------

<?php

require 'Task.php';

class Database
{


}

try {

    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'root');
} catch (PDOException $e) {
    die('Could not connect.');
    //die($e->getMessage());
}

//declare query that can be used to fetch data but wont executed yet.
$statement = $pdo->prepare('SELECT * FROM todos');

// all data in variable '$statement' will be executed.
$statement->execute();

//Insert all fetch data from database in $tasks
//$tasks = $statement->fetchAll(PDO::FETCH_OBJ); //fetchstyle: object
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


//Fetch description result in the first row
//var_dump($tasks[0]->description);

?>
-----------------------------------------

<?php

//Functions are define outside a class, we called an function in a class an method.

    //Reusable function code to dump data  // developer cares about the var name
    function dd($data)
    {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }


 function fetchAllTasks($pdo){

    $statement = $pdo->prepare('SELECT * FROM todos');


    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}


//Function to connect to database
 function connectToDb(){
    try {

        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'root');
    } catch (PDOException $e) {
        //die('Could not connect.');
        die($e->getMessage());
    }
}


?>















</body>

</html>
