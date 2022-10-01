<!-- Create php script which pass the array into function as parameters .
function should count the total number of odd and even number. -->
<?php
 foreach(range(0,200,4) as $val){
    $evenodd[]=$val;

 }
 function test($temp){
    $even=0;
    $odd=0;
    var_dump($temp);
    foreach($temp as $value){
        if($value%2==0){
            $even++;
        }
        else{
            $odd++;
        }
    }
    echo "even=". $even ."odd=".$odd;
 }
 test($evenodd);
?>