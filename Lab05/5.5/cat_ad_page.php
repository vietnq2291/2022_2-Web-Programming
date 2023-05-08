<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Administration page</title>
</head>
<body>
    <h1>Category Administration page</h1>

    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $mydb = "business_service";
    $table = "Categories";

    $conn = mysqli_connect($server, $user, $pass);
    if (!$conn) {
        die ("Cannot connect to $server using $user");
    }

    $query = "select * from $table";
    mysqli_select_db($conn, $mydb);
    $res_id = mysqli_query($conn, $query);
    if ($res_id) {
        print '<form action="cat_ad_page_submit.php" method="POST">';
        print '<table border=1>';
        print '<th>CatID</th><th>Title</th><th>Description</th>';
        while ($row = mysqli_fetch_row($res_id)) {
            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td>";
            }
            print '</tr>';
        }
        print '
        <tr>
        <td><input type="text" size="20" name="catID"></td>
        <td><input type="text" size="50" name="title"></td>
        <td><input type="text" size="50" name="desc"></td>
        </tr>
        ';
        print '</table>';
        print '<br><input type="submit" value="Add">';
        print ' <input type="reset" value="Reset">';
        print '</form>';
    } else {
        die ("Query failed. Query: $query<br>");
    }
    mysqli_close($conn);   
    ?>

    
</body>
</html>