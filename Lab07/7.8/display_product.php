<?php
$product = $_GET['inputText'];

$server = 'localhost';
$user = 'root';
$pass = '123456';
$database = 'mydatabase';
$table_name = 'Products';

$connect = mysqli_connect($server, $user, $pass);
mysqli_select_db($connect, $database);

print "<br>";
print '<font size="5" color="blue">';
print "Products Data:</font><br>";

$query = "SELECT * FROM $table_name WHERE product_desc LIKE '$product'";
$results_id = mysqli_query($connect, $query);

if ($results_id) {

    print '<table border=1>';
    print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
    while ($row = mysqli_fetch_row($results_id)) {

        print '<tr>';

        foreach ($row as $field) {
            print "<td>$field</td> ";
        }

        print '</tr>';

    }
} else {
    die("Query=$query failed!");
}
mysqli_close($connect);

?>
