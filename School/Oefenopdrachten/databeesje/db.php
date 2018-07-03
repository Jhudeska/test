<?php
/*
Define('DB_HOST' , 'localhost');
Define( 'DB_NAME','data' );
Define ( 'DB_USER', 'root');
Define( 'DB_PASS', 'root' );

    function verbinden(){
    $verbinding = 'mysql:host=' . DB_HOST . ';DB_NAME= '. DB_NAME;

    try {
    return new PDO( $verbinding, DB_USER, DB_PASS );
    }
    catch (PDOException $e ) {
    return NULL;
    }
    }

    $db = verbinden();
    if( is_null( $db ) )
    die('<h1>Database-verbinding mislukt</h1>' );
    echo 'gelukt'; */


$link = mysqli_connect('localhost','root', 'root', 'data') ;
if ($link == FALSE)
    exit("Verbinding is mislukt.") ;
//else print "Verbinding is gelukt!";

// Leg verbinding met database world

$dbresultaat = mysqli_select_db( $link,'data');
if ( ! $dbresultaat )
    exit("Database is niet gevonden.") ;
//else print "Database is gevonden!" ; ?>
?>


