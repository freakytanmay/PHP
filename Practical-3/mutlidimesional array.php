<?php
$cars = array (array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2),
array("Land Rover",17,15));
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$mularr = array(array("1","one",),array("2","two"),array("3","three"),array("4","four"));

echo $mularr[0][0] . "=>".$mularr[0][1].".<br>";
echo $mularr[1][0] . "=>".$mularr[1][1].".<br>";
echo $mularr[2][0]. "=>".$mularr[2][1].".<br>";

//iterating with loops
foreach($cars as $row){
    foreach($row as $col){
        echo $col . "<br>";
    }
    echo "\n";
}
//row and collecting data and throw iterator columns
foreach($mularr as $n){
    foreach($n as $m){
        echo $m . "<br>";
    }
    echo "\n";
}
?>