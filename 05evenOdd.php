<?php

$input = readline("Enter any number: ");

switch ($input) {

  case $input % 2 == 0:
    echo "\"$input\" is an even numbre.";
    break;

  case $input % 2 != 0:
    echo "\"$input\" is an odd numbre.";
    break;

  default:
    echo "INVALID INPUT: Please input only numbers.";
    break;
}