<<html>
    <head>
        <title>Conditional Test - Reply</title>
    </head>
    <body>
        <?php
            $first = $_GET["firstName"];
            $middle = $_GET["middleName"];
            $last = $_GET["lastName"];
            
            print "Hi $first! Your full name is $last $middle $first<br>";
            
            if ($first == $last) {
                print "$first and $last are equal.<br>";
            }
            elseif ($first < $last) {
                print "$first is less than $last<br>";
            } else {
                print "$first is greater than $last<br>";
            }
            
            $grade1 = $_GET["grade1"];
            $grade2 = $_GET["grade2"];
            $final = (2 * $grade1 + 3 * $grade2) / 5;
            
            if ($final > 89) {
                print "Your final grade is $final. You got an A. Congratulation!";
            } elseif ($final > 79) {
                print "Your final grade is $final. You got an B.";
            } elseif ($final > 69) {
                print "Your final grade is $final. You got an C.";
            } elseif ($final > 59) {
                print "Your final grade is $final. You got an D.";
            } elseif ($final >= 0) {
                print "Your final grade is $final. You got an F.";
            } else {
                print "Illegal grade. Value less than zero. Final: $final";
            }
        ?>
    </body>
</html>

