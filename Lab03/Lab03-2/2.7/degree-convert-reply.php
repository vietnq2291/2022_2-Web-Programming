<?php
$input_type = $_POST["type"];
$input = (float) $_POST["input"];

if ($input_type == "radian") {
    print "Radian: $input<br>";
    $res = $input * 180 / pi();
    print "-> Degree: $res";
} elseif ($input_type == "degree") {
    print "Degree: $input<br>";
    $res = $input * pi() / 180;
    print "-> Radian: $res";
} else {
    print "Invalid input type";
}
?>