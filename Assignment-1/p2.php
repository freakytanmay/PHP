<?php
$item=$_GET['item'];
$price=$_GET['price'];
$quantity=$_GET['Quantity'];

$totprice = $price * $quantity;

$with_Tax_price = $totprice + 0.07 + 0.02 ;
echo "Item=$item <br>" ;
echo "TOTAL PRICE = $with_Tax_price rupees";

?>