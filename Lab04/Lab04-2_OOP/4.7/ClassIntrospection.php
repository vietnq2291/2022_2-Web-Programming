<?php

function display_classes() {
    $classes = get_declared_classes();
    foreach ($classes as $class) {
        print "Showing information about $class<br>";
        print "$class methods:<br>";
        $methods = get_class_methods($class);
        if (!count($methods)) {
            print "<i>None</i><br>";
        } else {
            foreach ($methods as $method) {
                print "<b>$method</b>()<br>";
            }
        }
        print "$class properties:<br>";
        $properties = get_class_vars($class);
        if (!count($properties)) {
            print "<i>None</i><br>";
        } else {
            foreach (array_keys($properties) as $property) {
                print "<b>\$$properties</b><br>";
            }
        }
        print "<br>";
    }
}

display_classes();

?>