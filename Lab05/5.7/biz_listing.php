<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Listings</title>
</head>

<body>
    <?php
    // Init
    $server = 'localhost';
    $user = 'root';
    $pass = '123456';
    $database = 'business_service';

    // Connect to database
    $connect = mysqli_connect($server, $user, $pass);
    mysqli_select_db($connect, $database);

    // Print title
    print '<font size="6" color="blue">';
    print "<b>Business Listings</b></font><br><br>";

    // Query
    $query_cat = "SELECT * FROM `Categories`;";
    $results_id = mysqli_query($connect, $query_cat);

    print '<table>';
    print '<tr>';

    print '<td>';
    if ($results_id) {
        print '<table border=1>';
        print '<th>Click on a category to find business listings</th>';

        while ($row = mysqli_fetch_row($results_id)) {
            print '<tr>';
            print '<td><a href="?cat_id=' . urlencode($row[0]) . '">' . $row[1] . '</a></td>';
            print '</tr>';
        }

        print '</table>';
    } else {
        die("Query_cat=$query_cat failed!");
    }
    print '</td>';

    // Result of querying businesses
    $cat_id = $_GET['cat_id'];
    $query_biz = "SELECT * FROM `Businesses` b JOIN `Biz_Categories` bc ON `b`.`Business ID` = `bc`.`Business ID` WHERE `bc`.`Category ID` = '$cat_id';";
    $results_id = mysqli_query($connect, $query_biz);
    
    print '<td>';
    if ($results_id) {
        print '<table border=1>';

        while ($row = mysqli_fetch_row($results_id)) {
            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td> ";
            }
            print '</tr>';
        }

        print '</table>';
    } else {
        die("Query_cat=$query_biz failed!");
    }
    print '</td>';

    print '</tr>';
    print '</table>';

    mysqli_close($connect);
    ?>
</body>

</html>