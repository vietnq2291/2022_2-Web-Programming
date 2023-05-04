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

        label {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            width: 300px;
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
    <form action="insert_inventory_result.php" method="post">
        <label for="Item">Item Description:<input type="text" id="Item" name="Item"></label>
        
        <label for="Weight">Weight:<input type="text" id="Weight" name="Weight"></label>
        
        <label for="Cost">Cost:<input type="text" id="Cost" name="Cost"></label>
        
        <label for="Quantity">Number Available:<input type="text" id="Quantity" name="Quantity"></label>

        <div class="buttons">
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>
