<?php

//* Array declaration and intitialization
$numbers = array(10, 20, 30);
$days    = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

//* Accessing individual element from the array
echo "First day of the week is " . $days[0];
echo "<br/>The last number is" . $numbers[2];
echo "<br/>";

//*iterating through the array

// 1. Using for loop
echo "Using for loop <br/>";
for ($i = 0; $i < count($numbers); $i++) {
 echo "$numbers[$i] <br/> ";
}

echo "<br/>";

foreach ($numbers as $key => $value):
 echo "The value at $key is " . $value;
 echo "<br/>";
endforeach;

// TODO: while, do-while

// Delete from array
unset($days[3]);

print_r($days);
echo "<br/>";

$new_days = array_values($days);
print_r($new_days);
