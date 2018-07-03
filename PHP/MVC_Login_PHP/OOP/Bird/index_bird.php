<!--

//versie 1

require 'Bird.php';

$bird = new Bird(true, 2);

echo $bird->getLegCount();


//  versier 2
require 'Bird.php';
require 'Pigeon.php';

$pigeon = new Pigeon(true, 2);

echo $pigeon->getLegCount();


//versie 3
require 'Bird.php';
require 'Pigeon.php';

$pigeon = new Pigeon(true, 2);

if ($pigeon->canFly()){
    echo 'can Fly';
}

// versie 4
require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$penguin = new Penguin(true, 2);

if ($penguin->canFly()){
    echo 'can Fly1';
}

//version5
require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$penguin = new Penguin(true, 2);
$penguin->foo();


 -->

<?php

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$penguin = new Penguin(true, 2);
$penguin->foo();

