<?php
// Create php script which check number is palindrome or not. E.d 121 is palindrome
// number.

$x=120;
$y=$x;
$rev=0;
while(floor($x)){
    $temp=$x%10;
    $rev= $rev*10 +$temp;
    $x=$x/10;
}
if($rev==$y){
    echo "$y is palindrom number";
}
else{
    echo "$y is not palindrom number";
}

?>