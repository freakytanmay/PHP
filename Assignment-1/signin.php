<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signing</title>
</head>
<body>
    <form action="item.php" method="post">

    Name: <input type="text" name="name" required><br>
    Username : <input type="text" name="uname" id="" required> <br>
    Password : <input type="password" name="pwd" id="" required> <br>
    <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
// Write a PHP script for the following 
// Create a singin.php page which takes the information about the customer.(name, 
// logginname and password). If login name and password are same then it stores 
// customer name and login name into the session variables.
// Create a item.php which allowed to select the items for the order on click on add to 
// card button it redirect to addtocart.php 
// Create addtocart.php page listed out all selected items as well as customer name . if 
// user is logout then it display message “Login required”.
// Create logout.php which clear all session variables 
?>
