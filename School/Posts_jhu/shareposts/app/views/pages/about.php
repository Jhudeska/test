<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1>About</h1>
  <p>This is a social network type app built on the TraversyMVC framework</p>
  <p>App Version: <?php echo $data['version']; ?></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>



/*//Your practice code https://phpenthusiast.com/

class User{
    public $firstName;
    public $lastName;

    public function hello(){
        return "hello";
    }


}

$user1 = new User();
$user1->firstName = 'John';
$user1->lastName =  'Doe';

$hello = $user1->hello();
echo $hello . "," . $user1->firstName . " ". $user1->lastName;


$user2 = new User();
$user2->firstName = 'Jane';
$user2->lastName =  'Doe';

$hello = $user2->hello();
echo $hello . "," . $user2->firstName . " " . $user2->lastName;




class UserTwo{

    public $firstName;
    public $lastName;

    public function hello(){
        return "hello". ',' . $this->firstName;
    }

}

$user1 = new UserTwo();
$user1->firstName = "Jonnie";
$user1->lastName = "Roe";
echo $user1->hello();



class User{

    private $firstName;

    public function setFirstName($str){
        $this->firstName = $str;
        return $this;
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function okFirstName(){
        return $this->firstName;
    }

}

$user1 = new User();
$user1->setFirstName("Joe");
echo $user1->okFirstName();


class User{
    private $firstName;
    private $lastName;

    public function __construct($firstName,$lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(){
        return $this->firstName . " ". $this->lastName;
    }
}

$user1 = new User("Jhudeska","Ignacia");
echo $user1->getFullName();



// write the solution with a getter method inside the parent that can be used from the child class.

class User{
    //protected $username;
    private $username;

    public function setUsername($name){
        $this->username = $name;
    }
}

class Admin extends User{

    public function expressYourRoll(){
        return strtolower(__CLASS__);
    }

    public function sayHello(){
        return "Hello admin, " . $this->username;
    }

    public function getUsername(){
        return $this->username;
    }
}

$admin1 = new Admin();
echo $admin1->setUsername("Balthazar");
$admin->sayHello();



////////////////
///
///

abstract class User{

    protected $username;

    abstract public function stateYourRoll();

    public function setUsername($name){
        $this->username = $name;
    }

    public function getUsername(){
        return $this->username;
    }

}


class Admin extends User{

    public function stateYourRoll(){
        return "admin";
    }

}



class Viewer extends User{
    public function stateYourRoll(){
        return strtolower(__CLASS__);
    }
}


$user1 = new Admin();
$user1->setUsername("Bathazar");
echo $user1->stateYourRoll();


*/
///////////