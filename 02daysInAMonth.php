<?php

$months = ["Janruary", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$index = 0;

function days($month)
{

  global $months;

  if ($month == $months[0] || $month == $months[2] || $month == $months[4] || $month == $months[6] || $month == $months[7] || $month == $months[4] || $month == $months[9] || $month == $months[11]) {
    return 31;
  }
  if ($month == $months[3] || $month == $months[5] || $month == $months[8] || $month == $months[10]) {
    return 30;
  }

  if ($month == $months[1]) {
    return [28, 29];
  }
}

foreach ($months as $monthsss) {

  // echo $months[$index]. "\n";

  switch ($months[$index]) {

    case $months[$index]:
      $totalDays = days($months[$index]);
      if ($totalDays == [28, 29] && $months[1]) {

        echo "$months[$index] might has " . $totalDays[0] . " or " . $totalDays[1] . " days\n";
      } else {

        echo "$months[$index] has $totalDays days.\n";
      }
  }

  $index++;
}