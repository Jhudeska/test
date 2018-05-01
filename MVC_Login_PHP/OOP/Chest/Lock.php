<!--

// version1
class Lock {
    protected $isLocked;

    public function lock() {
        $this->isLocked = true;

    }
    public function unlock(){
        $this->isLocked = false;
    }

    public function isLocked() {
        return $this ->isLocked;
    }
}

// version2

-->

<?php

class Lock {
    protected $isLocked;

    public function lock() {
        $this->isLocked = true;

    }
    public function unlock(){
        $this->isLocked = false;
    }

    public function isLocked() {
        return $this ->isLocked;
    }
}