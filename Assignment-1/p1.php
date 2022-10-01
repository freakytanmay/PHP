<?php
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$n3=$_GET['n3'];
$n4=$_GET['n4'];
$n5=$_GET['n5'];
$n6=$_GET['n6'];
$n7=$_GET['n7'];
$n8=$_GET['n8'];
$n9=$_GET['n9'];
$n10=$_GET['n10'];

$arr1=array($n1,$n2,$n3,$n4,$n5);
$arr2=array($n6,$n7,$n8,$n9,$n10);
// $arr1=array(1,2,3,4,5);
// $arr2=array(6,7,8,9,10);

function sum_array($ar1,$ar2){
    $sum=0;
    $temp=0;
    for($i=0; $i<5; $i++){
        $temp=$ar1[$i]+$ar2[$i];
        $sum=$sum+$temp;
    }
    echo "<h1>Summation of two different array is values ==> $sum</h1>";
}
sum_array($arr1,$arr2);
?>