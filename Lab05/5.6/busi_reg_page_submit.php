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
$pass = "";
$mydb = "business_service";
$table = "Businesses";

$conn = mysqli_connect($server, $user, $pass);
if (!$conn) {
    die ("Cannot connect to $server using $user");
}

$query = "INSERT INTO $table(`Name`, `Address`, `City`, `Telephone`, `URL`) VALUES ('$name', '$addr', '$city', '$phone', '$url')";
// echo "Query: $query<br>";
mysqli_select_db($conn, $mydb);
$res_id = mysqli_query($conn, $query);

if ($res_id) {
    echo "Insert OK";
} else {
    echo "Insert Failed";
}

mysqli_close($conn);

?>