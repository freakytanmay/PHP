<?php
 session_start();
?>
<?php
$customer = $_SESSION['name'];
echo "Customer Name=" . $customer . "<br>";

echo "Selected Items:<br>";
foreach( $_POST['item'] as $val){
    echo $val. "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addtocart</title>
</head>
<body>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>