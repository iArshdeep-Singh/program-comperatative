<?php

$marks = (int)readline("\"How much marks have you got in exam?\" \tEnter:\t");

if ($marks > 500) {
  die("Please enter marks between 0 to 500.");
}

switch ($marks) {

  case $marks >= 350:
    echo "Well done! You have got grade \"A\"";
    break;

  case $marks >= 300:
    echo "Good! You have got grade \"B\"";
    break;

  case $marks >= 250:
    echo "You have got grade \"C\"";
    break;

  case $marks >= 200:
    echo "You have got grade \"D\". You have to study more for finals.";
    break;

  case $marks <= 100:
    echo "It's grade \"E\", you've got. You have failed the exam. You have to study more for passing finals.";
    break;

  default:
    echo "Please enter marks between 0 to 500";
}