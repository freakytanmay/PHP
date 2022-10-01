<?php
echo "<h1>Array_Search</h1>";
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); 
echo "Search Value Position=$key <br>" ;
$key = array_search('blue', $array);
echo "Search Value Position=$key";
?>