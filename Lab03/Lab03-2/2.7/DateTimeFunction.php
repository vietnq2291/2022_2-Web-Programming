<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time Function</title>
</head>
<body style="background-color: beige;">
    <h1>Date & Time Function</h1> 
    <form action="dt-reply.php" method="POST">
        <table>
            <tr><td style="font-weight: bold;">Person 1</td></tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name1" size="20" maxlength="20"></td>
            </tr>
            <tr>
                <td>Birthday: </td>
                <td><input type="text" name="bd1" size="20" maxlength="20"></td>
            </tr>

            <tr><td style="font-weight: bold;">Person 2</td></tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name2" size="20" maxlength="20"></td>
            </tr>
            <tr>
                <td>Birthday: </td>
                <td><input type="text" name="bd2" size="20" maxlength="20"></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>