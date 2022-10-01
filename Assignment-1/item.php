<?php
 session_start();
?>
<?php
 if($_POST['uname']==$_POST['pwd']){
    $_SESSION['uname']=$_POST['uname'];
    $_SESSION['name']=$_POST['name'];
    $customer=$_POST['name'];
    echo "session variable set";
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item</title>
</head>
<body>
    <form action="addtocart.php" method="post">
        <h3>Select the item</h3>
        Pencil <input type="checkbox" name="item[]" value="pencil" id="">
        Pen <input type="checkbox" name="item[]" value="pen" id="">
        Srapner <input type="checkbox" name="item[]" value="Srapner" id="">
        Campus <input type="checkbox" name="item[]" value="Campus" id="">
        LunchBox<input type="checkbox" name="item[]" value="LunchBox" id="">
        <input type="submit" value="AddtoCart">
        

    </form>
</body>
</html>



