<!-- Create php script which demonstrate all date functions. -->
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