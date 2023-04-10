<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Received</title>
    </head>

    <style>
        h1 {
            font-weight: normal;
        }
        h2 {
            font-weight: normal;
        }
    </style>

    <body>
        <?php
            $name = $_POST['name'];
            $studentID = $_POST['studentID'];
            $university = $_POST['university'];
            $class = $_POST['class'];
            $email = $_POST['email'];
            $hobbies = !empty($_POST['hobbies']) ? $_POST['hobbies'] : 'None';
            $interests = !empty($_POST['interests']) ? $_POST['interests'] : 'None';
            $otherHobby = $_POST['otherHobby'];
            $otherInterest = $_POST['otherInterest'];

            echo "<p style=\"font-size:20px\"><i>Hello $name!</i></p>";
            echo "<h1>We Got Your Input. Thank You!</h1>";
            echo "<h2><strong>Here is the information you entered:</strong></h2>";

            echo "<ul>";
            echo "<li><p><strong>Name:</strong> $name</p>";
                echo "<li><p><strong>Student ID:</strong> $studentID</p>";
                echo "<li><p><strong>University:</strong> $university</p>";
                echo "<li><p><strong>Class:</strong> $class</p>";
                echo "<li><p><strong>Email:</strong> $email</p>";

                echo "<li><strong>Hobbies:</strong> ";
                if ($hobbies != 'None')
                {
                    foreach ($hobbies as $hobby)
                    {
                        if ($hobby == "Others")
                        {
                            if ($otherHobby != null)
                            {
                                echo "<ul>";
                                echo "<li>$hobby: $otherHobby</li>";
                                echo "</ul>";
                            }
                            else
                            {
                                if (count($hobbies) == 1)
                                {
                                    echo "No Information";
                                }
                            }
                        }
                        else
                        {
                            echo "<ul>";
                            echo "<li>$hobby</li>";
                            echo "</ul>";
                        }
                    }
                }
                else
                {
                    echo "No Information";
                }

                echo "<p></p>";

                echo "<li><strong>Interests:</strong> ";
                if ($interests != 'None')
                {
                    foreach ($interests as $interest)
                    {
                        if ($interest == "Others")
                        {
                            if ($otherInterest != null)
                            {
                                echo "<ul>";
                                echo "<li>$interest: $otherInterest</li>";
                                echo "</ul>";
                            }
                            else
                            {
                                if (count($interests) == 1)
                                {
                                    echo "No Information";
                                }
                            }
                        }
                        else
                        {
                            echo "<ul>";
                            echo "<li>$interest</li>";
                            echo "</ul>";
                        }
                    }
                }
                else
                {
                    echo "No Information";
                }

            echo "</ul>";
        ?>
    </body>
</html>
