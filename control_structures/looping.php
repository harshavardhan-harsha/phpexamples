<?php

$count = 0;
while ($count <= 10) {
 echo $count . "\t";
 $count++;
}
$count = 0;
echo "<br/>";

do {
 echo $count . "\t";
 $count++;
} while ($count < 5);

echo "<br/>";

for ($count = 10; $count < 20; $count++) {
 echo $count . "\t";
}
