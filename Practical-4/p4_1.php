<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>p4_1</h1><br>  
</body>
</html>
<?php
function arithmetic($x1,$y1){
    settype($x1,"integer");
    settype($y1,"integer");
    $sum=$x1+$y1;
    $sub=$x1-$y1;
    $mul=$x1*$y1;
    $div=$x1/$y1;
    $mod=$x1%$y1;
    echo "Summation=$sum". "<br>";
    echo "Subtracion=$sub". "<br>";
    echo "Multification=$mul". "<br>";
    echo "Division=$div". "<br>";
    echo "Modulot=$mod". "<br>";
}
arithmetic(10,20)
?>