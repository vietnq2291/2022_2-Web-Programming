<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Square and Cube</title>
    </head>

    <body>
        <font size="5" color="blue">
            Generate Square and Cube Values
        </font>
        
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
                if (array_key_exists("start", $_GET))
                {
                    $start = $_GET["start"];
                    $end = $_GET["end"];
                }
                else
                {
                    $start = 0;
                    $end = 0;
                }
            ?>
            <table>
                <tr>
                    <td>Select Start Number: </td>
                    <td>
                        <select name="start">
                            <?php
                                for ($i=0; $i<=10; $i++)
                                {
                                    if ($start == $i)
                                    {
                                        print ("<option selected>$i</option>");
                                    }
                                    else
                                    {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Select End Number: </td>
                    <td>
                        <select name="end">
                            <?php
                                for ($i=0; $i<=10; $i++)
                                {
                                    if ($end < $start)
                                    {
                                        $end = $start;
                                    }
                                    if ($end == $i)
                                    {
                                        print ("<option selected>$i</option>");
                                    }
                                    else
                                    {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="right"><INPUT TYPE="SUBMIT" VALUE="Submit"></td>
                    <td align="left"><INPUT TYPE="RESET" VALUE="Reset"></td>
                </tr>
            </table>

            <table>
                <?php
                    if (array_key_exists("start", $_GET))
                    {
                        print "<tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
                        $i = $start;
                        while ($i <= $end)
                        {
                            $sqr = $i*$i;
                            $cubed = $i*$i*$i;
                            print "<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>";
                            $i = $i+1;
                        }
                    }
                ?>
            </table>
        </form>
    </body>
</html>
