<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Calculator</title>
</head>
<body>
    <h1>Distance Calculation Result</h1>
    <?php
    $cities = array('Dallas' => 803,
                    'Toronto' => 435,
                    'Boston' => 848,
                    'Nashville' => 406,
                    'Las Vegas' => 1526,
                    'San Francisco' => 1835,
                    'Washington, DC' => 595,
                    'Miami' => 1189,
                    'Pittsburgh' => 409);
    $destination = $_GET['destination'];
    if (isset($cities[$destination])) {
        $distance = $cities[$destination];
        $time = round(($distance / 60), 2);
        $walktime = round(($distance / 5), 2);
        print "The distance between Chicago and <b>$destination</b> is $distance miles<br>";
        print "Driving at 60 miles per hour would take $time hours<br>";
        print "Driving at 5 miles per hour would take $walktime hours<br>";
    } else {
        print "Please come back later. Currently, we do not have information about $destination yet.<br>";
    }
    ?>
</body>
</html>