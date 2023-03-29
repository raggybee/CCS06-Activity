<?php
$fname = $argv[1];
$birthdate = $argv[2];
$year = date("Y");
$age = $year - $birthdate;

echo "Your name is $fname, and your age is $age years old\n";

if ($age >= 18) {
  echo "You are a voter\n";
}

if ($age >= 60) {
  echo "You are a senior citizen\n";
}
?>