<!-- Create php script which demonstrate the scope of local variable. {display the appropriate
error also in output by making changes into script) -->

<?php
$x=10;
function demo(){
    $x=20;
    $y=20;

}
demo();
echo "$x"; // value 10 to 20
echo "$y";
// Notice: Undefined variable: y in D:\study\MCA\SEM-3\PHP\htdocs\Pratical-2\p2_7.php on line 13
?>