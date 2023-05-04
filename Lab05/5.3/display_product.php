<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Table Output
    </title>
</head>
<body>
    <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '123456';
        $database = 'mydatabase';
        $table_name = 'Products';

        $connect = mysqli_connect($server, $user, $pass);
        mysqli_select_db($connect, $database);

        print '<font size="6" color="blue">';
        print "Products Data</font><br>";

        $query = "SELECT * FROM $table_name";
        print "The Query is <i>$query</i><br>";        
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
        
        mysqli_close($connect);
    ?>
</body>
</html>