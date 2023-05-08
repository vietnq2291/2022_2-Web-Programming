<?php

$catID = $_POST["catID"];
$title = $_POST["title"];
$desc = $_POST["desc"];

if (empty($catID) || empty($title) || empty($desc)) {
    echo "Please fill out the form";
    return;
}
$catID = strtoupper($catID);

$server = "localhost";
$user = "root";
$pass = "";
$mydb = "business_service";
$table = "Categories";

$conn = mysqli_connect($server, $user, $pass);
if (!$conn) {
    die ("Cannot connect to $server using $user");
}

$query = "insert into $table values ('$catID', '$title', '$desc')";
mysqli_select_db($conn, $mydb);
$res_id = mysqli_query($conn, $query);

if (!$res_id) {
    if (mysqli_errno($conn) == 1062) {
        echo "Error: Category ID '$catID' already exists, try a new one.";
    } else {
        echo "An error occurred during the insertion: " . mysqli_error($conn);
    }
} else {
    echo "Inserted new category successfully.";
}

$query = "select * from $table";
mysqli_select_db($conn, $mydb);
$res_id = mysqli_query($conn, $query);

if ($res_id) {
    print '<table border=1>';
    print '<th>Category ID</th><th>Title</th><th>Description</th>';
    while ($row = mysqli_fetch_row($res_id)) {
        print '<tr>';
        foreach ($row as $field) {
            print "<td>$field</td>";
        }
        print '</tr>';
    }
    print '</table>';
} else {
    die ("Query failed. Query: $query<br>");
}

mysqli_close($conn);

?>