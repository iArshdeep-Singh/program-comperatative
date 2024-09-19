<?php
$first = (int)readline("Enter a number: ");
$sign = readline('Enter +, -, *, or / to calculate the number you\'ve already entered and the number will be entered next: ');
$second = (int)readline("Enter a number: ");

$input = [$first, $second];

switch ($sign) {
  case "+":
    echo "$input[0] + $input[1] = " . $input[0] + $input[1];
    break;

  case "-":
    echo "$input[0] - $input[1] = " . $input[0] - $input[1];
    break;

  case "*":
    echo "$input[0] x $input[1] = " . $input[0] * $input[1];
    break;

  case "/":
    echo "$input[0] / $input[1] = " . $input[0] / $input[1];
    break;

  default:
    print("You've entered an invalid character. Or might be entered an invalid numbre.");
    break;
}