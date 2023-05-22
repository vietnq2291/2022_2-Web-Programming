<?php
$product = $_GET['inputText'];

$server = 'localhost';
$user = 'root';
$pass = '123456';
$database = 'mydatabase';
$table_name = 'Products';

$connect = mysqli_connect($server, $user, $pass);
mysqli_select_db($connect, $database);

$query = "SELECT product_desc FROM $table_name WHERE product_desc LIKE '%$product%'";
$results_id = mysqli_query($connect, $query);

$suggestions = array();
if ($results_id) {
 while ($row = mysqli_fetch_row($results_id)) {
   array_push($suggestions, $row[0]);
 }
} else {
 die("Query=$query failed!");
}
mysqli_close($connect);

echo json_encode($suggestions);
?>
