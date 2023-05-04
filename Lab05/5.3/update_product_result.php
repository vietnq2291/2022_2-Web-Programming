<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font size="6" color="blue" >Update Results for Table Products</font> <br>

    <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '123456';
        $database = 'mydatabase';
        $table_name = 'Products';

        $connect = mysqli_connect($server, $user, $pass);
        mysqli_select_db($connect, $database);
        
        $Product = $_POST['Product'];
        $query = "UPDATE $table_name
                    SET Numb = Numb-1
                    WHERE (Product_desc = '$Product')";
        print "The query is <i> $query </i><br><br>";
        $results_id = mysqli_query($connect, $query);

        if ($results_id) {
            $query = "SELECT * FROM $table_name";
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
        } else {
            die("Query=$query failed!");
        }
        mysqli_close($connect);
    ?>
</body>
</html>