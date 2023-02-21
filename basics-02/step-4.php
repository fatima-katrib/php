<?php

$var = 153;

function isArmstrong($var)
{
  $sum = 0;
  $r = 0;
  $number = $var;
  while ($number > 0) {
    $r = $number % 10;
    $number = ($number - $r) / 10;
    $sum += $r ** 3;
  };
  return ($sum == $var);
}

if (isArmstrong($var)) {
  echo "is Armstrong\n";
} else {
  echo "not Armstrong\n";
}
?>