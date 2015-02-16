<?php
$user_birthmonth = $_GET["user_birthmonth"];
$user_favorite_color = $_GET["user_favorite_color"];
$current_temperature = $_GET["temperature"];

$message = tellBirthFortune($user_birthmonth) . " " . tellColorFortune($user_favorite_color);



function tellBirthFortune($birthday_month)
  {
    if ($birthday_month < 5) {
      return "You are fabulous!";
    }
    elseif ($birthday_month > 8) {
      return "You are super duper!";
    }
    else {
      return "You are one cool kid!";
    }
  }

function tellColorFortune($favorite_color)
  {
    if ($favorite_color == red || $favorite_color = blue || $favorite_color = red) {
      return "Your color choice tells me you are a bold decision maker.";
    }
    elseif ($favorite_color == black || $favorite_color ==brown) {
      return "You are a deep thinker.";
    }
    elseif ($favorite_color == white) {
      return "The details matter to you.";
    }
    elseif ($favorite_color == orange || $favorite_color == purple) {
      return "You like to be unique in a crowd."''
    }
    else {
      return "Hmmmm, that's interesting.";
    }
  }

function tellTemperature($temperature)
  {
    if ($temperature < 60) {
      return "It's cold out!";
    }
    elseif ($temperature > 80) {
      return "It's too hot!";
    }
    else {
      return "It's a lovely day. Get off your computer and go outside!";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <body>
    <?php echo $message; ?>
  </body>
</head>
</html>

