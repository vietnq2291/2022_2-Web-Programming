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
        <title>Date Time Validation</title>
    </head>

    <body>
        <font size="5" color="blue">
            Appointment Time Validation
        </font>

        <p>Enter your name and select date and time for the appointment</p>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
                if (array_key_exists("username", $_GET))
                {
                    $username = $_GET["username"];
                    $month = $_GET["month"];
                    $day = $_GET["day"];
                    $year = $_GET["year"];
                    $hour = $_GET["hour"];
                    $minute = $_GET["minute"];
                    $second = $_GET["second"];
                }
                else
                {
                    $date = 1;
                    $month = 1;
                    $year = 2022;
                    $hour = 0;
                    $minute = 0;
                    $second = 0;
                }
            ?>
            <table>
                <tr>
                    <td>Your name: </td>
                    <td><input type="text" size="15" maxlength="255" name="username" value="<?php echo isset($_GET['username']) ? $_GET['username'] : '' ?>"></td>
                </tr>

                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="month">
                            <?php
                                $monthList = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                for ($i=0; $i<=11; $i++)
                                {
                                    if ($month == $monthList[$i])
                                    {
                                        print ("<option selected>$monthList[$i]</option>");
                                    }
                                    else
                                    {
                                        print ("<option>$monthList[$i]</option>");
                                    }
                                }
                            ?>
                        </select>

                        <select name="day">
                            <?php
                                $num_of_days = 31;
                                $leap_year = ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
                                switch ($month):
                                    case "January":
                                    case "March":
                                    case "May":
                                    case "July":
                                    case "August":
                                    case "October":
                                    case "December":
                                        break;
                                    case "April":
                                    case "June":
                                    case "September":
                                    case "November":
                                        $num_of_days = 30;
                                        break;
                                    case "February":
                                        if ($leap_year)
                                        {
                                            $num_of_days = 29;
                                        }
                                        else
                                        {
                                            $num_of_days = 28;
                                        }  
                                endswitch;

                                for ($i=1; $i<=$num_of_days; $i++)
                                {
                                    if ($day == $i)
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

                        <select name="year">
                            <?php
                                for ($i=1600; $i<=3000; $i++)
                                {
                                    if ($year == $i)
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
                    <td>Time: </td>
                    <td>
                        <select name="hour">
                            <?php
                                for ($i=0; $i<=59; $i++)
                                {
                                    if ($hour == $i)
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

                        <select name="minute">
                            <?php
                                for ($i=0; $i<=59; $i++)
                                {
                                    if ($minute == $i)
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

                        <select name="second">
                            <?php
                                for ($i=0; $i<=23; $i++)
                                {
                                    if ($second == $i)
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

            <br>
            <?php
                if (array_key_exists("date", $_GET))
                {
                    $username = $_GET["username"];
                    $month = $_GET["month"];
                    $day = $_GET["day"];
                    $year = $_GET["year"];
                    $hour = $_GET["hour"];
                    $minute = $_GET["minute"];
                    $second = $_GET["second"];

                    $leap_year = ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
                    $num_of_days = 31;
                    switch ($month):
                        case "January":
                        case "March":
                        case "May":
                        case "July":
                        case "August":
                        case "October":
                        case "December":
                            break;
                        case "April":
                        case "June":
                        case "September":
                        case "November":
                            $num_of_days = 30;
                            break;
                        case "February":
                            if ($leap_year)
                            {
                                
                                $num_of_days = 29;
                            }
                            else
                            {
                                $num_of_days = 28;
                            }
                            break;
                    endswitch;

                    $valid_day = 1;
                    if ($day > $num_of_days)
                    {
                        $valid_day = 0;
                    }

                    if (($username != "") && $valid_day)
                    {
                        print "<p>Hi $username!";
                        print "<br>";
                        print "You have chosen to have an appoinment on $hour:$minute:$second, $month-$date-$year</p>";

                        print "<p>More information:</p>";
                        if ($second < 12)
                        {
                            print "<p>In 12 hours, the time and date is $hour:$minute:$second AM, $month-$date-$year</p>";
                        }
                        else
                        {
                            $hourpm = $hour-12;
                            print "<p>In 12 hours, the time and date is $hourpm:$minute:$second PM, $month-$date-$year</p>";
                        }
                        
                        print "<p>This month has $num_of_days days.</p>";
                    }
                }  
            ?>
        </form>
    </body>
</html>

