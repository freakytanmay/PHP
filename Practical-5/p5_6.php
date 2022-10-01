<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="viewhobbies.php" method="post">
    UserName : <input type="text" name="username" id="" required><br>
    Hobbies:  <br>
    signing<input type="checkbox" name="sing" value="singing" id=""><br>
    dancing<input type="checkbox" name="dance" value="dancing" id=""><br>
    fitness<input type="checkbox" name="fitness" value="fitness" id=""><br>

    <input type="submit" name="login" value="Login">
    </form>
 

</body>
</html>

<?php
 
?>