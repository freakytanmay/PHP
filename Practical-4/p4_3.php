<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>P4_3</h1>
</body>
</html>
<?php
 $str="Hold the Vision Trust the Process";
 echo "<h2>$str</h2>";  
 echo "1. Reverse the string==" . strrev($str). "<br>";
 echo "2. Count the length of the string==".strlen($str). "<br>";
 echo "3. Display the first word of the string==".$str[0]. "<br>";
 echo "4.Display last five words from the string==".substr($str,-5,strlen($str)). "<br>";
 echo "Display characters from position 5 to 15 from the string==".substr($str,5,15). "<br>"; 
?>