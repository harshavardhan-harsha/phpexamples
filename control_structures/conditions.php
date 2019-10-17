<?php

date_default_timezone_set("Asia/kolkata");
$hours = date("H");
echo "$hours";
echo "<br/>";

//* if-else statement
$num1 = 10;
$num2 = 20;

if ($num1 > $num2) {
 printf("%d is greater", $num1);
} else {
 printf("%d is greater", $num2);
}

//*if-else-if ladder
if ($hours > 6 && $hours < 12) {
 echo '<h1>good morining</h1>';
} elseif ($hours == 12) {
 echo "<h1>good noon</h1>";
} else {
 echo "<h1>";
 echo "good evening or night";
 echo "</h1>";
}

//* Switch statement
$grade = 'd';
switch ($grade) {
 case 'a':
  echo "You are passed with distinction";
  break;
 case 'b':
  echo "You are passed with first class";
  break;
 case 'c':
  echo "You are passed with second class";
  break;
 default:
  echo "You are failed";
  break;
}
