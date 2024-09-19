<?php

$first = readline("Enter a numbre: ");
$second = readline("Enter other numbre: ");


$input = [$first, $second];

switch ($input) {

  case $input[0] > $input[1]:
    echo "$input[0] is greater than $input[1].";
    break;

  case $input[0] == $input[1]:
    echo "$input[0] is equal to $input[1].";
    break;

  default:
    echo "Invalid Input";
    break;
}