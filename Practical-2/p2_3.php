<!-- . Create php script which change the datatypes using appropriate values. And display the
new datatypes (integer to string , string to integer, Boolean to integer, integer to float, float
to integer) -->
<?php
$int =123;
$float =12.3;
$str="tanmay";
$bool=True;
$a=420;
settype($int,"string");
echo "datatype=" . gettype($int) . "  value=$int" . "<br>" ;
settype($str,"integer");
echo "datatype=" . gettype($str) . "  value=$str". "<br>";
settype($bool,"integer");
echo "datatype=" . gettype($bool) . "  value=$bool". "<br>";
settype($a,"float");
echo "datatype=" . gettype($a) . "  value=$a". "<br>";
settype($float,"integer");
echo "datatype=" . gettype($float) . "  value=$float". "<br>";

?>