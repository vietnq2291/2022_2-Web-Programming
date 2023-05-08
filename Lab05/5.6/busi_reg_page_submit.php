<?php

$categories = $_POST['categories'];

$name = $_POST['name'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$url = $_POST['url'];

if (empty($categories) ||
    empty($name) ||
    empty($addr) ||
    empty($city) ||
    empty($phone) ||
    empty($url)) {
        echo "Please fill out all necessary information.";
        return;
    }

// foreach ($categories as $cat) {
//     echo "$cat<br>";
// }
// echo "$name<br>$addr<br>$city<br>$phone<br>$url<br>";

$server = "localhost";
$user = "root";
$pass = "123456";
$mydb = "business_service";
$table = "Businesses";

$conn = mysqli_connect($server, $user, $pass);
if (!$conn) {
    die ("Cannot connect to $server using $user");
}

$query = "INSERT INTO $table(`Name`, `Address`, `City`, `Telephone`, `URL`) VALUES ('$name', '$addr', '$city', '$phone', '$url')";
mysqli_select_db($conn, $mydb);
$res = mysqli_query($conn, $query);

if ($res) {
    echo "Insert OK<br>";
} else {
    echo "Insert Failed";
}

// insert into biz_categories
// get id of above business
$query = "SELECT `Business ID` FROM $table WHERE `Name` = '$name' AND `Address` = '$addr' AND `City` = '$city' AND `Telephone` = '$phone' AND `URL` = '$url'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);
$biz_id = $row['Business ID'];

// insert into biz_categories
foreach ($categories as $cat) {
    $query = "INSERT INTO `Biz_Categories`(`Business ID`, `Category ID`) VALUES ('$biz_id', '$cat')";
    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Insert OK<br>";
    } else {
        echo "Insert Failed";
    }
}


mysqli_close($conn);

?>