<html>
    <head>
        <title> Coin Flip! </title>
    </head>
    <body>
        <font size="4" color="blue"> Please Pick Heads or Tails! </font>
        
        <form action="GotFlip.php" method="POST">
            <?php
                print "<INPUT TYPE=\"radio\" name=\"pick\" VALUE=0 > Heads";
                print "<INPUT TYPE=\"radio\" name=\"pick\" VALUE=1 > Tails";
                print "<br>";
            ?>
            <input type="SUBMIT" value="Submit">
            <input type="RESET" value="Restart">
        </form>

    </body>
</html>
