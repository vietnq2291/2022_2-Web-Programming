<?php
    $firstname= "John";
    $lastname= "Smith";
    $fullname = "$firstname $lastname";
    print($fullname . "<br>");
    
    $comments = "Good Job";
    $len = strlen($comments);
    print ("Length: $len<br>");
    
    $inquote= "Now Is The Time";
    $lower = strtolower($inquote);
    $upper = strtoupper($inquote);
    print ("upper=$upper<br>lower=$lower<br>");
    
    $date = "12/25/2002";
    $month = substr($date, 0, 2);
    $day = substr($date, 3, 2);
    print ("Month=$month Day=$day<br>");
?>

