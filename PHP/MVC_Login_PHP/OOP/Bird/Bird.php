<!--
versie 1

class Bird{

    public $canFly;
    public $legCount;

    public function __construct($canFly, $legCount)
    {
        $this->canFly = $canFly;
        $this->legCount = $legCount;
    }

    public function canFly() {
        return $this->canFly;
    }

    public function getLegCount() {
        return $this->legCount;
    }
}


// Status of the properties
//public  - available to all classes
//protected - available to all class and subclasses
//private -available only in its own classes

//version 5

    protected $legCount; // change this


-->

<?php
class Bird{

    public $canFly;
    public $legCount;

    public function __construct($canFly, $legCount)
    {
        $this->canFly = $canFly;
        $this->legCount = $legCount;
    }

    public function canFly() {
        return $this->canFly;
    }

    public function getLegCount() {
        return $this->legCount;
    }
}