<!--

//version 1
class Chest{

    protected $lock;
    protected $isClosed;


    public function __construct($lock) {
        $this->lock = $lock;
    }

    public function close($lock) {
        if($lock === true) {
            $this->lock->lock();
        }

        $this->isClosed = true;

        echo 'Closed';
    }

    public function isClosed(){
        return $this->isClosed;

    }

    public function  open(){
        if($this->lock->isLocked()) {
            $this->lock->unlock();
        }
        $this->isClosed = false;

        echo 'Open';
    }

    public function isLocked(){
        return $this->isLocked;
    }
}



// version 2
class Chest{

    protected $lock;
    protected $isClosed;


    public function __construct($lock) {
        $this->lock = $lock;
    }

    public function close($lock = true) {
        if($lock === true) {
            $this->lock->lock();
        }

        $this->isClosed = true;

        echo 'Closed';
    }

    public function isClosed(){
        return $this->isClosed;

    }

    public function  open(){
        if($this->lock->isLocked()) {
            $this->lock->unlock();
        }
        $this->isClosed = false;

        echo 'Open';
    }

    public function isLocked(){
        return $this->isLocked;
    }
}


-->
<?php

class Chest{

    protected $lock;
    protected $isClosed;


    public function __construct( Lock $lock) {
        $this->lock = $lock;
    }

    public function close($lock = true) {
        if($lock === true) {
            $this->lock->lock();
        }

        $this->isClosed = true;

        echo 'Closed';
    }

    public function isClosed(){
        return $this->isClosed;

    }

    public function  open(){
        if($this->lock->isLocked()) {
            $this->lock->unlock();
        }
        $this->isClosed = false;

        echo 'Open';
    }

    public function isLocked(){
        return $this->isLocked;
    }
}