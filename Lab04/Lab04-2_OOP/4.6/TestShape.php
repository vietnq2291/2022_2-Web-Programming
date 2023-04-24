<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$A = array();

$rec = new Rectangle();
$rec->width = 5;
$rec->height = 7;
array_push($A, $rec);

$tri = new Triangle();
$tri->base = 4;
$tri->height = 5;
array_push($A, $tri);

$cir = new Circle();
$cir->radius = 3;
array_push($A, $cir);

$col = new Color();
$col->name = "blue";
array_push($A, $col);

foreach ($A as $s) {
    if ($s instanceof Shape) {
        print "Area: " . $s->getArea() . "<br>";
    }
    if ($s instanceof Polygon) {
        print "Sides: " . $s->getNumberOfSides() . "<br>";
    }
    if ($s instanceof Color) {
        print "Color: " . $s->name . "<br>";
    }
}

?>