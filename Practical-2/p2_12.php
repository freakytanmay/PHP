<?php
$x=452;
$y=$x;
$rev=0;
while(floor($x)){
    $temp=$x%10;
    $rev= $rev*10 +$temp;
    $x=$x/10;
}
echo "$y reverse number is =$rev"
?>