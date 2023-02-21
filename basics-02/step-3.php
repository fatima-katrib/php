<?php
$var1 = 32;
$var2 = 45;

// 1st method
$temp = $var1;
$var1 = $var2;
$var2 = $temp;
echo "var1 = ".$var1."\n". "var2 = ".$var2."\n \n";

//2nd method
$var1 = $var1 + $var2;
$var2 = $var1 - $var2;
$var1 = $var1 - $var2;
echo "var1 = ".$var1."\n". "var2 = ".$var2."\n";
?>