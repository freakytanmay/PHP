<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>p4_4</h1>
</body>
</html>

<?php
 echo "Today date= " .date("d/m/Y") ."<br>";
 echo "Today day= " .date("d") ."<br>";
 echo "Current month= " .date("m") ."<br>";
 echo "Current year= " .date("Y") ."<br>";
 echo "Week Day= " .date("l") ."<br>";
 date_default_timezone_set("Asia/Kolkata");
 echo date_default_timezone_get();
 echo "<br>Time: ". date("h:i:s a");
?>