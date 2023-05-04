<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Inventory</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"] {
            width: 150px;
            padding: 5px;
            margin-left: 10px;
        }

        .buttons {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 5px 15px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form action="search_inventory_result.php" method="post" style="align-items: left;">
        <font size="6" color="blue">Inventory Search</font>
        <br>
        <label for="product_desc">Enter product to search for:<input type="text" id="product_desc" name="product_desc"></label>

        <div class="buttons">
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>
