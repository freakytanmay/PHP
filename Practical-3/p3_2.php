<?php
$evenarr =[];
$chars= range(50,200,2);
foreach($chars as $var){
$evenarr[]=$var;
echo "$var";
}
foreach($evenarr as $val){
echo $val;
}
$sum=array_sum($evenarr);
echo "<br> sum=$sum";
$average = array_sum($evenarr)/count($evenarr);
echo "<br> Average=$average";

$max= max($evenarr);
echo "<br> maximum= $max";
$min = min($evenarr);
echo "<br> minimum= $min";
?>
