<!--
  //version5
class Pigeon extends Bird{ //Extends Bird means that every property and method will be available in Pigeon //inheretance
    public function foo() {
        echo $this->legCount;
    }
}
 -->

<?php

class Penguin extends Bird {
    public function foo() {
        echo $this->legCount;
    }
}