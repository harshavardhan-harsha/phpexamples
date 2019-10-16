<html>
<head>
    <meta http-equiv="refresh" content="1">
    <title>Digital Clock</title>
    <style type="text/css">
    h1 { text-align: center }
    </style>
</head>

<body>
    <?php
echo "<h1>Digital Clock</h1>";
echo "<hr/>";
echo "The time in " . date_default_timezone_get() . " is " . date("d/M/Y h:i:s");
date_default_timezone_set("Asia/Kolkata");
$time_zone = date_default_timezone_get();
echo "<h1> The time in " . $time_zone . " zone is " . date('h:i:s A') . "</h1>";
echo "<hr/>";
// $timezone_identifiers = DateTimeZone::listIdentifiers();
// foreach($timezone_identifiers as $key => $list){
//         echo $list . "<br/>";
// } ?>
</body>

</html>