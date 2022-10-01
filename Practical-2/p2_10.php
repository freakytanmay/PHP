<?php
// . Create php script which print the first ten odd numbers.
echo "between 1 to 10 odd number";
for($x=1; $x <= 10; $x++){
    if ($x % 2 != 0){
        echo "<br>" . "$x"."<br>";
    }
}


?>