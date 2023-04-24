<?php

class MethodTest {
    public function __call($method, $args) {
        print "Calling object method '$method' with arguments " . implode(", ", $args) . "<br>";
    }

    public static function __callStatic($method, $args) {
        print "Calling static method '$method' with arguments " . implode(", ", $args) . "<br>";
    }
}

$obj = new MethodTest();
$obj->runTest("in object context");
$obj->runTest("in class context");

?>