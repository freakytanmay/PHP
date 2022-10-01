<?php
 echo "Hello World";

 echo "Name=" .$_GET['name'] . "<br>";
 echo "Branch=".$_GET['branch']. "<br>";
 echo "Semester=".$_GET['sem']. "<br>";
 echo "Rno=". $_GET['rno']. "<br>";
 echo "Email=" . $_GET['email'] . "<br>";
 echo "Contact Number" . $_GET['cno']. "<br>";
 //echo "Subject Of Interest="; 
    $select=$_GET['sub'];
echo "Subject Of Interest=  $select";
    
?>