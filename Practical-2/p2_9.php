<!-- Create php script which demonstrate the working and scope of static variable. (hint create
function having static variable) -->
<?php

function check(){
    static $x=0;
    echo "$x";
    $x++;
}
check();
check();
check();
check();
check();
check();
check();
check();
?>