<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>p4_2
    </h1>
</body>
</html>
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