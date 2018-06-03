<?php

use PHPUnit\Framework\TestCase;

include 'testsample.php';

class UnitTestSample extends TestCase {
    public function testSom() {
        $x = 11;
        $y = 12;
        $result = som($x, $y);
        $this->assertEquals(23, $result, 0);
    }

    public function testMin() {
        $x = 11;
        $y = 12;
        $result = min_function($x, $y);
        $this->assertEquals(-1, $result, 0);
    }

    public function testProduct() {
        $x = 11;
        $y = 12;
        $result = product_function($x, $y);
        $this->assertEquals(132, $result, 0);
    }

    public function testModulo() {
        $x = 11;
        $y = 12;
        $result = modulo_function($x, $y);
        $this->assertEquals(11, $result, 0);
    }


}

?>