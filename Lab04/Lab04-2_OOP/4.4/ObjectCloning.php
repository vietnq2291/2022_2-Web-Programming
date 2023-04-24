<?php
    class ObjectTracker {
        private static $nextSerial = 0;
        private $id, $name;

        function __construct($name) {
            $this->name = $name;
            $this->id = ++self::$nextSerial;
        }

        function __clone() {
            $this->name = "Clone of $this->name";
            $this->id = ++self::$nextSerial;
        }

        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }
    }

    $ot = new ObjectTracker("Zeev's Object");

    /* 4.4.2: Using clone to create a new object */
    $ot2 = clone $ot; $ot2->setName("Another object");

    // 1 Zeev's Object
    print($ot->getId() . " " . $ot->getName() . "<br>");
    // 2 Clone of Zeev's Object
    print($ot2->getId() . " " . $ot2->getName() . "<br>");

    /* 4.4.3: Using = operator to create a new object */
    $ot3 = $ot; $ot3->setName("Yet another object");

    // 1 Zeev's Object
    print($ot->getId() . " " . $ot->getName() . "<br>");
    // 3 Yet another object
    print($ot3->getId() . " " . $ot3->getName() . "<br>");

    /*
    Comment:
        - The function __clone() will be called when the object is cloned. It will override the name attribute to "Clone of $this->name", then increase the id attribute by 1.
        - The function __clone() will NOT be called when the object is assigned to another variable using the assignment operator (=). Instead, both variables will point to the same object in memory, and changes made to one variable will affect the other variable as well.
    */
?>