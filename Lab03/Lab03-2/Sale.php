<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Shop</title>
</head>
  <body>
    <font size=4 color="blue">
      <?php
        $today = date("l, F d, Y");
        print "Welcome on $today to our huge blowout sale! </font> <br> <br>";
        $month = date("m");
        $year = date("Y");
        $dayofyear = date("z");

        if ($month == 12 && $year == 2001) {
          $daysleft = 365 - $dayofyear + 10;
          print "<br> There are $daysleft sales days left";
        } elseif ($month == 1 && $year == 2002) {
          if ($dayofyear <= 10) {
            $daysleft = 10 - $dayofyear;
            print "<br> There are $daysleft sales days left";
          } else {
            print "<br> Sorry, our sale is over";
          }
        } else {
          print "<br> Sorry, our sale is over";
        }
        print "<br> Our Sale Ends January 10, 2002";
      ?>
  </body>
</html>