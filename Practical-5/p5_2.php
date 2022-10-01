<?php
echo "hello" . "<br>";
    if($_GET['num1'] || $_GET['num2']){
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        settype($n1,"integer");
        settype($n2,"integer");
        if(isset($_GET['add'])){
            echo "Addtion="; 
            echo $n1+$n2;
        }
        else if(isset($_GET['sub'])){
            $sub = $n1-$n2;
            echo "Subtraction=";
            echo $sub;
        }
        else if(isset($_GET['mul'])){
            $mul = $n1*$n2;
            echo "Multification=";
            echo $mul;
        }
        else{
            $div = $n1/$n2;
            echo "Division=";
            echo $div;
        }
    }
        
?>