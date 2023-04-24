<?php
    class BaseClass {
        protected $name = "BaseClass";
        function __construct() {
            print "In " . $this->name . " constructor<br>";
        }
        function __destruct() {
            print "Destroying " . $this->name . "<br>";
        }
    }

    class SubClass extends BaseClass {
        function __construct() {
            $this->name = "SubClass";
            parent::__construct();
        }
        function __destruct() {
            parent::__destruct();
        }
    }

    $obj1 = new SubClass();
    /* Question 4.2.2:
        - If only $obj1 is created, the function __construct() of the class SubClass will be called first. It will override "name" attribute to "SubClass", then call the function __construct() of the class BaseClass to print "In BaseClass constructor". 
        - At the end, the function __destruct() of the class BaseClass will be called first, then the function __destruct() of the class SubClass will be called to print "Destroying SubClass".
    */

    $obj2 = new BaseClass();
    /* Question 4.2.3:
        - If $obj2 is added to the code besides $obj1, the function __construct() of the class BaseClass will be called to print "In BaseClass constructor" after the function __construct() of the class SubClass is called for $obj1.
        - At the end, the function __destruct() of the class BaseClass will be called twice, first for $obj2, then for $obj1.
    */
?>