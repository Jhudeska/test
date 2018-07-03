<?php

$host = "localhost";
$db = "test2";
$user = "root";
$pass = "root";

$conn = new
PDO("mysql:host=$host;dbname=$db", $user, $pass);

$sql="SELECT * FROM books";
$q =$conn->query($sql) or die("failed!");
while($r = $q->fetch(PDO::FETCH_ASSOC)){
    echo $r['title']. "<br>";
}
?>





<?php
echo "<br>";
/*
 * It is general that we use, without set fetch mode
 */

// configuration
$dbhost = "localhost";
$dbname = "test2";
$dbuser = "root";
$dbpass = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// query
$sql = "SELECT title FROM books ORDER BY title";
$q = $conn->query($sql);

// fetch
while($r = $q-> fetch()){
    print_r($r);
    echo "<br>";
}

// result

//Array ( [title] => PHP AJAX [0] => PHP AJAX )

//Array ( [title] => PHP API [0] => PHP API )

//Array ( [title] => PHP Eclipse [0] => PHP Eclipse )

//Array ( [title] => PHP Prado [0] => PHP Prado )

//Array ( [title] => PHP SEO [0] => PHP SEO )

//Array ( [title] => PHP Web Services [0] => PHP Web Services )

//Array ( [title] => PHP Zend Framework [0] => PHP Zend Framework )
?>



<?php
echo "<br>";
/*
 * Fetch Association
 */
// configuration
$dbhost = "localhost";
$dbname = "test2";
$dbuser = "root";
$dbpass = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// query
$sql = "SELECT title FROM books ORDER BY title";
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

// fetch
while($r = $q->fetch()){
    print_r($r);
    echo "<br>";
}
// result

//Array ( [title] => PHP AJAX)

//Array ( [title] => PHP API)

//Array ( [title] => PHP Eclipse)

//Array ( [title] => PHP Prado)

//Array ( [title] => PHP SEO)

//Array ( [title] => PHP Web Services)

//Array ( [title] => PHP Zend Framework)
?>


<?php
echo "<br>";
/*
 * Fetch Num (like mysql_fetch_row())
 */

// configuration
$dbhost = "localhost";
$dbname = "test2";
$dbuser = "root";
$dbpass = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// query
$sql = "SELECT title FROM books ORDER BY title";
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_NUM);

// fetch
while($r = $q->fetch()){
    print_r($r);
    echo "<br>";
}
// result

//Array ( [0] => PHP AJAX )

//Array ( [0] => PHP API )

//Array ( [0] => PHP Eclipse )

//Array ( [0] => PHP Prado )

//Array ( [0] => PHP SEO )

//Array ( [0] => PHP Web Services )

//Array ( [0] => PHP Zend Framework )
?>


<?php
echo "<br>";
/*
 * Fetch Both (default)
 */

// configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query
$sql = "SELECT title FROM books ORDER BY title";
$q    = $conn->query($sql);

$q->setFetchMode(PDO::FETCH_BOTH);
$q    = $conn->query($sql);

// fetch
while($r = $q->fetch()){
    print_r($r);
    echo"<br>";

}

// result

//Array ( [title] => PHP AJAX [0] => PHP AJAX )

//Array ( [title] => PHP API [0] => PHP API )

//Array ( [title] => PHP Eclipse [0] => PHP Eclipse )

//Array ( [title] => PHP Prado [0] => PHP Prado )

//Array ( [title] => PHP SEO [0] => PHP SEO )

//Array ( [title] => PHP Web Services [0] => PHP Web Services )

//Array ( [title] => PHP Zend Framework [0] => PHP Zend Framework )
?>


<?php
echo "<br>";
/*
 * PDO: Prepared Statement
 */

// configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$title = 'PHP AJAX';

//query
//In this simple example, query depends on a variabel (we write with ?).
$sql = "SELECT * FROM books WHERE title = ?";
$q = $conn->prepare($sql);

//Now, we manipulate this query to create the prepared statement and execute it:
$q->execute(array($title));
$q->setFetchMode(PDO::FETCH_BOTH);

//fetch
while($r = $q->fetch()){
    print_r($r);
    echo"<br>";
}
?>


<?php
echo "<br>";
/*
 * PDO: Positional and Named Placeholders
 */

// configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$title = 'PHP%';
$author = 'Bobi%';

// query
$sql = " SELECT * FROM books WHERE title LIKE ? AND  author LIKE?";
//these question marks are called positional placeholders.

$q = $conn->prepare($sql);
$q->execute(array($title, $author));
$q->setFetchMode(PDO::FETCH_BOTH);

// fetch
while($r = $q->fetch()){
    print_r($r);
        echo "<br>";
}

?>

<?php
/*
 * Now we will implement prepared statement for insert and update data. I will show simple example.
 */
echo "<br>";

//configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data
$title = 'PHP Security';
$author = 'Jack Hijack';

// query  --> Insert data
$sql = "INSERT INTO books(title,author) VALUES (:title, :author)";
$q = $conn->prepare($sql);
//$q->execute(array(':author' =>$author, ':title' =>$title ));


// new data
$title = 'PHP Pattern';
$author = 'Imanda';
$id = 3;

// query  --> Update data
$sql = "UPDATE books SET title=?, author=? WHERE id=?";
$q = $conn->prepare($sql);
$q->execute(array($title, $author, $id));
?>

<?php
echo "<br>";
/*
 * PDO: Prepared Statement and Bound Values
 */

//configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

//new data

// query
$sql = "SELECT * FROM books";
$q = $conn->prepare($sql);
$q->execute();
$q->bindColumn(1, $id);
$q->bindColumn(2,$title);
$q->bindColumn(3, $author);
while($q->fetch()){
    echo "$title, $author <br/>";
}
?>


<?php
echo "<br>";
/*
 * PDO: Working With BLOBs
 */

//configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data
$title = "ZEND FRAMEWORK TUTORIAL";
$author = "PHP Everyday";
$cover = fopen('7.png', 'rb');

// query Insert Data
$sql = "INSERT INTO books2(title, author, cover) VALUES (?, ?, ?)";
$q = $conn->prepare($sql);
$q->bindParam(1, $title);
$q->bindParam(2,$author);
$q->bindParam(3, $cover, PDO::PARAM_LOB);
//$q->execute();
?>


<?php
echo "<br>";
/*
 * PDO: Working With BLOBs
 * this is sample for retrieve data:
 */


//configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query -->  Retrieve data
$sql = "SELECT id, title, author, cover FROM Books2";
$q = $conn->prepare($sql);
$q->bindColumn(1, $id);
$q->bindColumn(2, $title);
$q->bindColumn(3, $author);
$q->bindColumn(4, $cover, PDO::PARAM_LOB);
while($q->fetch()){

    file_put_contents($id, ".jpg", $cover);
    echo "$title, $author, &lt;img src='".$id.".jpg'&gt; &lt;br/&gt;";
}
?>


<?php
echo "<br>";
/*
 * PDO: Setting Connection Attributes
 *  Others value for this attribute: PDO::CASE_LOWER and PDO::CASE_NATURAL.
 */

//configuration
$dbhost     = "localhost";
$dbname           = "test2";
$dbuser           = "root";
$dbpass           = "root";

// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query
$conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
$sql = "SELECT * FROM books";
$q->execute();
$r = $q->fetch(PDO::FETCH_ASSOC);
print_r($r);

//result:

//Array ( [ID] => 1

//        [TITLE] => PHP AJAX

//        [AUTHOR] => Andreas

//        [DESCRIPTION] => This is good book for learning AJAX

//        [ON_SALE] => 1

//        [COVER] => )
?>

<?php
    echo "<br>";
/*
 * PDO: Error Mode Attributes
 * PDO::ERRMODE_SILENT: when there is error, no action is taken.
 * The error codes are available via PDO::errorCode() and PDO::errorInfo().
 * It is default value for PDO::ATTR_ERRMODE.
 */
    $dbhost     = "localhost";
    $dbname           = "test2";
    $dbuser           = "root";
    $dbpass           = "root";

// database connection
    $conn = new
    PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$sql = "SELECT * FROM booksa";

$q = $conn->query($sql) or die ("ERROR: " . implode (":", $conn->errorInfo()));
$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

//result:
//ERROR: 42S02:1146:Table 'test.booksa' doesn't exist
?>

<?php
    echo "<br>";
/*
 * PDO::ERRMODE_WARNING:
 * No action is taken, but an error will be raised with E_WARNING level.
 */


//query

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$sql = "SELECT * FROM booksa";
$q = $conn->query($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

//result:

//Warning: PDO::query() [function.PDO-query]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'test.booksa' doesn't exist in

//C:\AppServ5\www\test\pdo\test.php on line 15

//ERROR: 42S02:1146:Table 'test.booksa' doesn't exist
?>



<?php
    echo "<br>";
/*
PDO::ERRMODE_EXCEPTION: will set the error codes
(as with PDO::ERRMODE_SILENT) and en exception of class PDOException will be thrown.
 */

//query
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM booksa";
$q = $conn->query($sql) or die ("ERROR: " . implode( ":", $conn->errorInfo()));
$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

//result:

//Fatal error: Uncaught exception 'PDOException' with message 'SQLSTATE[42S02]:
// Base table or view not found: 1146 Table 'test.booksa' doesn't exist' in
//C:\AppServ5\www\test\pdo\test.php:15 Stack trace: #0
//C:\AppServ5\www\test\pdo\test.php(15): PDO->query('SELECT * FROM b...') #1 {main} thrown in
//C:\AppServ5\www\test\pdo\test.php on line 15
?>

<?php
echo "<br>";
/*
PDO: Improve Performance with Persistent Connection
 */

// query
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM books";

$q = $conn->query($sql) or die ("ERROR: " . implode(":", $conn->errorinfo()));
$r =  $q->fetch(PDO::FETCH_ASSOC);
print_r($r);
?>

<?php
/*
 * PDO: Improve Performance with Persistent Connection
 */
echo "<br>";

$dbhost = "localhost";
$dbname = 'test2';
$dbuser = "root";
$dbpass = "root";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true));

echo $conn->getAttribute(PDO::ATTR_DRIVER_NAME)

// result: mysql

?>

Else example:

<?php

// configuration
$dbhost        = "localhost";
$dbname        = "test2";
$dbuser        = "root";
$dbpass        = "root";
// database connection

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(PDO::ATTR_PERSISTENT => true));

echo $conn->getAttribute(PDO::ATTR_DRIVER_NAME);
echo "<br>";
echo $conn->getAttribute(PDO::ATTR_CLIENT_VERSION);
echo "<br>";
echo $conn->getAttribute(PDO::ATTR_SERVER_VERSION);
?>














