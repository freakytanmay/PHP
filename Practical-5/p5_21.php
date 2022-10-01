<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Create a HTML form that reads 2 numbers and has 4 buttons for operation:-
Add, Difference, Product. Based on the button clicked by the user the result
should be displayed as output.   -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Num1 : <input type="text" name="num1" id="">
        Num2 : <input type="text" name="num2" id="">


        <input type="submit" name="add" value="add">
        <input type="submit" name="sub" value="sub">
        <input type="submit" name="mul" value="mul">
        <input type="submit" name="div" value="div">
    </form>
</body>

</html>
<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    settype($num1,"integer");
    settype($num2,"integer");
    if (isset($_POST['add'])) {
        $add = 0;
        $add = $num1 + $num2;
        echo $add;
    } 
    else if (isset($_POST['sub'])) {
        $sub = 0;
        $sub = $num1 - $num2;
        echo $sub;
    } 
    else if (isset($_POST['mul'])) {
        $mul = 0;
        $mul = $num1 * $num2;
        echo $mul;
    }
     else if (isset($_POST['div'])) {
        $div = 0;
        $div = $num1 / $num2;
        echo $div;
    }
}


?>