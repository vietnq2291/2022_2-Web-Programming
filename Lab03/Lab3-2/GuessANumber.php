<!DOCTYPE html>
<html>
  <head>
    <title>Guess a Number</title>
  </head>
  <body>
    <h1>Guess a Number</h1>

    <form method="POST">
        <label for="guess">Enter a number between 0 and 100:</label>
        <input type="text" name="guess" id="guess">
        <input type="SUBMIT" name="submit" value="Submit">
        <input type="SUBMIT" name="restart" value="Restart">
        <br> <br>
    </form>
  </body>
</html>

<?php

session_start();

if (isset($_POST['restart'])) {
  print '<span style="color:green;">';
  echo 'Game restarted! </span>';
  unset($_SESSION['random_number']);
  unset($_SESSION['guess_count']);
  exit;
}

if (!isset($_SESSION['random_number'])) {
  // Generate a random number between 0 and 100 if it doesn't already exist in session
  $_SESSION['random_number'] = rand(0, 100);
  $_SESSION['guess_count'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

  // Handle form submission
  if (!isset($_POST['guess'])) {
    echo 'You must enter a number!';
    exit;
  }
  
  $guess = $_POST['guess'];
  
  if (!is_numeric($guess)) {
    echo 'You must enter a number!';
    exit;
  }
  $guess = intval($guess);

  if ($guess == $_SESSION['random_number']) {
    // The user guessed correctly
    print '<span style="color:blue;">';
    echo 'Congratulations! You guessed the number in ' . ($_SESSION['guess_count'] + 1) . ' tries. </span>';
    // Reset the game
    unset($_SESSION['random_number']);
    unset($_SESSION['guess_count']);
    exit;
  } else {
    // The user guessed incorrectly
    $_SESSION['guess_count']++;

    if ($guess < $_SESSION['random_number']) {
      print '<span style="color:red;">';
      echo 'Wrong. Please try a <strong> higher </strong> number. You have guessed ' . $_SESSION['guess_count'] . ' time(s)!</span>';
    } else {
      print '<span style="color:red;">';
      echo 'Wrong. Please try a <strong> lower </strong> number. You have guessed ' . $_SESSION['guess_count'] . ' time(s)!</span>';
    }
  }
}
?>