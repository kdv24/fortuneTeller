<?php
$user_birthmonth = $_GET["user_birthmonth"];
$user_favorite_color = $_GET["user_favorite_color"];
$current_temperature = $_GET["temperature"];

function tellFortune($birthday_month, $favorite_color)
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
