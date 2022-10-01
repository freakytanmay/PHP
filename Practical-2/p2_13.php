<?php
$age=25;

if($age<20 || $age>60){
    echo "not valid age";
}
else if($age>20 && $age<35){
    echo "age between 20 to 35";
}
else if($age>36 && $age<55){
    echo "age is between 36 to 55";
}
else{
    echo "age is more than 55";
}
?>