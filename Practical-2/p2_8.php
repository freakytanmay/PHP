<!-- Create php script which declare two global variable and demonstrate the scope of the global
variable . {display the appropriate error also in output by making changes into script) -->

<?php
$x=20;
$y=10;

function demo(){
   global $x,$y;
    $x++;
    $y++;
    echo "scope=$x <br>";
}
echo "$x";
demo(); //Notice: Undefined variable: x in D:\study\MCA\SEM-3\PHP\htdocs\Pratical-2\p2_8.php on line 9
echo "$y";
?>