<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form name="form1" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
TEXT:<input type="text" name="text" id="">
<input type="submit" value="Submit">
</form> -->
</body>
</html>
<?php
// Create a php script which have an indexed array. And eliminate the duplicate 
// number from the array . and display the new size of array.(without taking a another 
// array for the operation)
// e.g (1,2,4,3,2,4,8) Output : 1,2,4,3,8 : new size of array is 5

$arr = array(1,2,4,3,2,4,8);
// sort($arr);
// $count=0;
// $length=count($arr);
// for($i=0; $i<$length+1; $i++){
    
//     if($arr[$i] != $arr[$i+1]){
//         $count++;
//         print_r($arr[$i]);
//     }
// }
// echo $count;
echo "Before duplicate element<br>";
echo "Original array= ";
print_r($arr);
echo "<br>";
echo "Size of array=" . count($arr) . "<br>";

$arr=array_unique($arr,SORT_NUMERIC);

echo "After elimenate the duplicate element <br>";
print_r($arr);
echo "<br>";
echo "Size of array=" . count($arr) . "<br>";
// foreach($arr as $val){
//     echo $val;
// }

?>