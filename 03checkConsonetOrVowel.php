<?php

$input = (string)readline("Enter any letter of English alphabet: ");

switch ($input) {
  case $input == "a" || "e" || "i" || "o" || "u":
    echo "\"$input\" is a vowel letter.\n";
    break;

  case $input != "a" || "e" || "i" || "o" || "u":
    echo "\"$input\" is a consonet letter.\n";
    break;

  default:
    echo "Invalid character.";
    break;
}