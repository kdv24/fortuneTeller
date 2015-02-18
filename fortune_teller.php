<?php
$user_birthmonth = $_GET["user_birthmonth"];
$user_favorite_color = $_GET["user_favorite_color"];
$current_temperature = $_GET["temperature"];


$message = "I can tell you are both " . tellBirthFortune($user_birthmonth) . " and " . tellColorFortune($user_favorite_color) . ".  I also know " . tellTemperature($current_temperature);

//Need to add CSS code to pretty up HTML doc it returns

function tellBirthFortune($birthday_month)
  {
    if ($birthday_month < 5) {
      return "fabulous";
    }
    elseif ($birthday_month > 8) {
      return "super duper";
    }
    else {
      return "very interesting";
    }
  }

function tellColorFortune($favorite_color)
//add code to generate background that matches $favorite_color response
  {
    if (($favorite_color == red) || ($favorite_color == blue) || ($favorite_color == yellow)) {
      return "a bold decision maker";
    }
    elseif (($favorite_color == brown) || ($favorite_color == black)) {
      return "a deep thinker";
    }
    elseif ($favorite_color == white) {
      return "a person who cares about the details";
    }
    elseif (($favorite_color == orange) || ($favorite_color == purple)) {
      return "you like to be unique in a crowd";
    }
    else {
      return "you are a free thinker";
    }
  }

function tellTemperature($temperature)
//add in get date function to check against $temperature
  {
    if ($temperature < 60) {
      return "it's cold out!";
    }
    elseif ($temperature > 80) {
      return "it's too hot!";
    }
    else {
      return "it's a lovely day, so get off your computer and go outside!";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
<link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fortune_teller.css">
  <title>Your fortune</title>
</head>
  <body>
    <p><?php echo $message; ?></p>
  </body>
</html>

