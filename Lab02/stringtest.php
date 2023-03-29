<html>
    <head>
        <title>Lab02</title>
    </head>
    <body>
        <?php
            $first_num = 12;
            $second_num = 356;
            
            $temp = $first_num;
            $first_num = $second_num;
            $second_num = $temp;
            
            print ("first_num = $first_num <br> second_num = $second_num");
        ?>
        <br> <br>
        
        <?php
            $apples = 12;
            $oranges = 14;
            $total_fruit = $apples + $oranges;
            
            print ("The total number of fruit is $total_fruit");
        ?>
        <br> <br>
        
        <?php
            $columns = 20;
            $rows = 12;
            $total_seats = $rows * $columns;
            
            $ticket_cost = 3.75;
            $total_revenue = $ticket_cost * $total_seats;
            
            $building_cost = 300;
            $profit = $total_revenue - $building_cost;
            
            print ("Total Seats are $total_seats <br>");
            print ("Total Revenue is $total_revenue <br>");
            print ("Total profit is $profit");
        ?>
        <br> <br>
        
        <?php
            $grade1 = 50;
            $grade2 = 100;
            $grade3 = 75;
            $average = ($grade1 + $grade2 + $grade3) / 3;
            
            print ("The average is $average");
        ?>
        <br> <br>
        
        <?php
            $firstname = "John";
            $lastname = "Smith";
            $fullname = $firstname . $lastname;
            $fullname2 = "$firstname $lastname";
            
            print ("Fullname=$fullname <br>");
            print ("Fullname2=$fullname2");
        ?>
        <br> <br>
        
        <?php
            $comments = "Good Job";
            $len = strlen($comments);
            print ("Length=$len");
        ?>
        <br> <br>
        
        <?php
            $in_name = " Joe Jackson ";
            $name = trim($in_name);
            print ("name=$name$name");
        ?>
        <br> <br>
        
        <?php
            $inquote = "Now Is The Time";
            $lower = strtolower($inquote);
            $upper = strtoupper($inquote);
            print ("upper=$upper lower=$lower");
        ?>
        <br> <br>

        <?php
            $date = "12/25/2002";
            $month = substr($date, 0, 2);
            $day = substr($date, 3, 2);
            $year = substr($date, 6, 4);
            print ("Month=$month Day=$day Year=$year");
        ?>
        <br> <br>
        
        <form action="http://webwizard.aw.com/~phppgm/First.php"
        method="post" >
            <h1> Contact information </h1>

            Enter email address:
            <input type="text" size="16" maxlength="20" name="email">
            <br>

            May we contact you?
            Yes <input type="radio" name="contact" value="Yes">
            No <input type="radio" name="contact" value="No">

            <br> <br>
            <input type="submit" value="Click To Submit">
            <input type="reset" value="Erase and Restart">
        </form>
        <br> <br>
        
    </body>
</html>