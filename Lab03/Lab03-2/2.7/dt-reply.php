<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time Function Reply</title>
</head>
<body style="background-color: beige">
    <h1>Birthdays</h1>
    <?php
    $num_to_month = array(
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November",
        12 => "December"
    );

    function process_datetime($bd1, $bd2, $num_to_month) {
        $pcs1 = explode("/", $bd1);
        $pcs2 = explode("/", $bd2);
        if (count($pcs1) != 3 || count($pcs2) != 3) { 
            print "Invalid date format. Should be DD/MM/YYYY<br>";
            return; 
        }

        $y1 = (int) $pcs1[2];
        $m1 = (int) $pcs1[1];
        $d1 = (int) $pcs1[0];
        $y2 = (int) $pcs2[2];
        $m2 = (int) $pcs2[1];
        $d2 = (int) $pcs2[0];
        if ($y1 < 0 || $y1 < 0 || $m1 < 1 || $m1 > 12 || $m2 < 1 || $m2 > 12 || $d1 < 0 || $d1 > 31 || $d2 < 0 || $d2 > 31) {
            print "Invalid date value";
            return;
        }
        
        print "Person 1: $num_to_month[$m1] $d1, $y1<br>";
        print "Person 2: $num_to_month[$m2] $d2, $y2<br>";
        $dif = abs(($y2 - $y1) * 365 + ($m2 - $m1) * 30 + ($d2 - $d1));
        print "Difference in days: $dif<br>";
        $age1 = 2023 - $y1;
        $age2 = 2023 - $y2;
        print "Person 1's age: $age1<br>";
        print "Person 2's age: $age2<br>";
        $a_dif = abs($age1 - $age2);
        print "Age difference: $a_dif";
    }

    $name1 = $_POST["name1"];
    $bd1 = $_POST["bd1"];
    $name2 = $_POST["name2"];
    $bd2 = $_POST["bd2"];

    process_datetime($bd1, $bd2, $num_to_month);
    ?>
</body>
</html>