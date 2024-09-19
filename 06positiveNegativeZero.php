<?php

$input = (int)readline("Enter a positve or negative numbre: ");

switch ($input) {

  case 0:
    echo "You entered zero. \t\"$input\"";
    break;

  case $input > 0 && $input !== 0:
    echo "You entered a positive number. \t\"$input\"";
    break;

  case $input < 0:
    echo "You entered a negative number. \t\"$input\"";
    break;

  default:
    echo "You have entered an invalid input.";
    break;
}