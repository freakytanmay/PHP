<?php
 $a = array('product' => array('Price','Quantity'),'book' => array('Price' => 20, 'Quantity' => 2),
 'pen' => array('Price' => 10, 'Quantity' => 5),'Eraser' => array('Price' => 3, 'Quantity' => 2)
 ,'pencil' => array('Price' => 5, 'Quantity' => 1),'campus' => array('Price' => 100, 'Quantity' => 1));
 echo "<table border = 1";
foreach ($a as $key => $value)
 {
 echo "<tr><th>" . $key . "</th>";
foreach ($value as $key1 => $value1)
 {
    echo "<td>" . $value1 . "</td>";
 }
 }
 echo "</tr></table>";
?>