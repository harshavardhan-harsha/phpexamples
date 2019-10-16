<?php

//* Function with no parameters
function getTimeWithNoParameters()
{
    return date('H:i:s');

}
echo getTimeWithNoParameters();

//* Function with parameters
function getTime($show_seconds)
{
    if ($show_seconds):
        return date('H:i:s');
    else:
        return date('H:i');
    endif;
}
$show_seconds = false;
$output = getTime($show_seconds);
echo "<h1>The current time is $output</h1>";

// TODO: Pass by value
// TODO: Pass by reference
