<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    function get_categories() {
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
        $res = mysqli_query($conn, $query);

        $cats = array();
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $catID = $row['Category ID'];
                $title = $row['Title'];
                $cats[$catID] = $title;
            }
            mysqli_free_result($res);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        return $cats;
    }
    ?>

    <h1>Business Registration</h1>
    <form action="busi_reg_page_submit.php" method="POST">
    <div class="flex-container">
        <div class="left">
            <div>Click on one or control-click on multiple categories</div><br>
            <select name="categories[]" multiple>

            <?php
            $cats = get_categories();
            foreach ($cats as $catID => $title) {
                echo "<option value=\"$catID\">$title</option>";
            }
            ?>

            </select>
        </div>

        <div class="flex-container right">
            <div>
                Business name:<br>
                Address:<br>
                City:<br>
                Telephone:<br>
                URL:<br>
            </div>
            <div>
                <input type="text" size="30" name="name"><br>
                <input type="text" size="30" name="addr"><br>
                <input type="text" size="30" name="city"><br>
                <input type="text" size="30" name="phone"><br>
                <input type="text" size="30" name="url"><br>
            </div>
        </div>
    </div>
    <br><input type="submit" value="Add">
    </form>
</body>
</html>