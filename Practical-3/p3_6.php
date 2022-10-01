<!-- Write a script which create an array called marks , containing student name as key
and mark as value. (e.g “Pratik”=> 34 ,”reema”= 36) .
1 ) display the array according to marks in ascending order.
2) display the array according to the name in descending order -->
<?php
$marks = array("tanmay" => 90,"satyam" => 85,"ayush" => 98,"ramesh" => 45,"suresh" => 60);

echo "<p>display the array according to marks in ascending order.</p>";
asort($marks);
foreach($marks as $x=>$x_value)
{
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}

echo "<p>display the array according to the name in descending order.</p>";
krsort($marks);
foreach($marks as $x=>$x_value)
{
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
?>
