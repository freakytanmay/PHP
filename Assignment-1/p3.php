<?php
 
 $select = $_GET['sorting'];
 echo $select ;
$arr = array(1=>"one",2=>"two",3=>"three",4=>"four",5=>"five");

 if($select == 'asort'){
    asort($arr);
    print_r($arr);
 }
 else if($select == 'arsort'){
    arsort($arr);
    print_r($arr);
 }
 else{
    ksort($arr);
    print_r($arr);
 }
?>