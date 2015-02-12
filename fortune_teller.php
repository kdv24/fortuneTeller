<?php
$user_birthmonth = $_GET["user_birthmonth"];
$user_favorite_color = $_GET["user_favorite_color"];
$current_temperature = $_GET["temperature"];

$message = tellBirthFortune($user_birthmonth) . tellColorFortune($user_favorite_color) . tellTemperature($current_temperature);

function tellBirthFortune($birthday_month)
  {
    if ($birthday_month < 5) {
      //say this
    }
    elseif ($birthday_month > 8) {
      //say this
    }
    else {
      //say this
    }
  }

function tellColorFortune($favorite_color)
  {
    if ($favorite_color == red || $favorite_color = blue || $favorite_color = red) {
      //say something about primary colors
    }
    elseif ($favorite_color == black || $favorite_color ==brown) {
      //say something dark
    }
    elseif ($favorite_color == white) {
      //say something about clean
    }
    elseif ($favorite_color == orange || $favorite_color == purple) {
      //say something about non-conforming
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
