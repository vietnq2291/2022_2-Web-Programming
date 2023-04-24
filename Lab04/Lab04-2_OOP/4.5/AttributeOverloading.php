<?php

class PropertyTest {
    private $data = array();
    public $declared = 1;
    private $hidden = 2;

    public function __set($name, $value) {
        print "Setting '$name' to '$value'<br>";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        print "Getting '$name'<br>";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error (
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'], E_USER_NOTICE
        );
        return null;
    }

    public function __isset($name) {
        print "Is $name set?<br>";
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        print "Unsetting $name<br>";
        unset($this->data[$name]);
    }

    public function getHidden() {
        return $this->hidden;
    }
}

$obj = new PropertyTest();
$obj->a = 1;
print $obj->a;

var_dump(isset($obj->a));
print '<br>';
unset($obj->a);
var_dump(isset($obj->a));
print '<br>';

print $obj->declared;
print '<br>';
print $obj->getHidden();
print '<br>';
print $obj->hidden;
?>