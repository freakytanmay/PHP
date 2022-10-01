<?php

if (isset($_POST['login'])) {
    
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        echo "Username=" . $_SESSION['username'] . "<br>";

        echo "Hobbies";
        if (isset($_POST['sing'])) {
            $_SESSION['singing'] = $_POST['sing'];
            echo "<br>" . $_SESSION['singing'];
        }
        if (isset($_POST['dance'])) {
            $_SESSION['dancing'] = $_POST['dance'];
            echo "<br>" . $_SESSION['dancing'];
        }
        if (isset($_POST['fitness'])) {
            $_SESSION['fitness'] = $_POST['fitness'];
            echo "<br>" . $_SESSION['fitness'];
        }
    } 



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
    <form action="signout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>

</html>