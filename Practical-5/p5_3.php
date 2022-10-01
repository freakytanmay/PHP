<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    num1<input type="number" name="n1" id=""><br>
    num2<input type="number" name="n2" id=""><br>
    num3<input type="number" name="n3" id=""><br>
    num4<input type="number" name="n4" id=""><br>
    num5<input type="number" name="n5" id=""><br>
    num6<input type="number" name="n6" id=""><br>
    num7<input type="number" name="n7" id=""><br>
    num8<input type="number" name="n8" id=""><br>
    num9<input type="number" name="n9" id=""><br>
    num10<input type="number" name="n10" id=""><br> <br><br>

    <input type="submit" name="submit"value="Sum">
</form>
</body>
</html>
<?php
    if(isset($_GET['submit'])){
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
        
        $arr = array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);
        $sum=0;
        for($i=0; $i<10; $i++){
            $sum=$sum+$arr[$i];
        }
        echo "Summation 10 value=". $sum;   

    }
?>