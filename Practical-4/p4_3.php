<!-- Create php script which create function having choice and string as
parameter and perform following task on string based on choice. The
function should return the answer.
1. Reverse the string.
2. Count the length of the string
3. Display the first word of the string.
4. Display last five words from the string.
5. Display characters from position 5 to 15 from the string -->
<?php
 $str="Hold the Vision Trust the Process";
 echo "1. Reverse the string==" . strrev($str). "<br>";
 echo "2. Count the length of the string==".strlen($str). "<br>";
 echo "3. Display the first word of the string==".$str[0]. "<br>";
 echo "4.Display last five words from the string==".substr($str,-5,strlen($str)). "<br>";
 echo "Display characters from position 5 to 15 from the string==".substr($str,5,15). "<br>"; 
?>