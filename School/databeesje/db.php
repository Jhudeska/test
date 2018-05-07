<?php

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
    echo 'gelukt'; ?>

klasse met  hoofdletter
fetch obj
fetch assoch
fetch class
