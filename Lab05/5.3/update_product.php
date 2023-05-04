<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Management</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        label {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            width: 200px;
        }

        input[type="text"] {
            width: 150px;
            padding: 5px;
            margin-left: 10px;
        }

        .buttons {
            display: flex;
            flex-direction: row;
            justify-content: left;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 5px 15px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form action="update_product_result.php" method="post">
        <font size="6" color="blue" >Select product we just sold:</font>
        <br>

        <label for="Item">Hammer<input type="radio" name="Product" value="Hammer"> </label>
        <label for="Item">Screw Driver<input type="radio" name="Product" value="Screw Driver"> </label>
        <label for="Item">Wrench<input type="radio" name="Product" value="Wrench"> </label>

        <div class="buttons">
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset">
        </div>
        
    </form>

    <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '123456';
        $database = 'mydatabase';
        $connect = mysqli_connect($host, $user, $passwd);
        $table_name = 'Products';
        
        $query = "SELECT * FROM $table_name";
        print "The query is <i>$query </i><br><br>";
        mysqli_select_db($connect, $database);
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
</body>
</html>