<?php
$cookies_stud="student";
$cookies_m1="marks1";
$cookies_m2="marks2";
$cookies_m3="marks3";

$stud_val=$_GET['stud'];
$m1_val=$_GET['m1'];
$m2_val=$_GET['m2'];
$m3_val=$_GET['m3'];

setcookie($cookies_stud,$stud_val,time()+ (86400 * 30),'/');
setcookie($cookies_m1,$m1_val,time()+ (86400 * 30),'/');
setcookie($cookies_m2,$m2_val,time()+ (86400 * 30),'/');
setcookie($cookies_m3,$m3_val,time()+ (86400 * 30),'/');

if(isset($_COOKIE[$cookies_stud]) && isset($_COOKIE[$cookies_m1]) && isset($_COOKIE[$cookies_m2]) && isset($_COOKIE[$cookies_m3])){
    echo "Student Name" . $_COOKIE[$cookies_stud];
    echo "Student Marks-1" . $_COOKIE[$cookies_m1]; 
    echo "Student Marks-2" .$_COOKIE[$cookies_m2];
    echo "Student Marks-3" .$_COOKIE[$cookies_m3];

}
else{
    echo "cookies not set";
}
?>
