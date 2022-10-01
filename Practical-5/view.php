
<!-- //  if(isset($_GET['submit'])){
// $cookie_username = "username";
// $cookie_age = "age";
// $cookie_city = "city";
// $username_value=$_GET['username'];
// $age_value=$_GET['age'];
// $city_value=$_GET['city'];
// setcookie($cookie_username,$username_value ,time() + (86400 * 30), "/"); // 86400 = 1 day
// setcookie($cookie_age,$age_value ,time() + (86400 * 30), "/");
// setcookie($cookie_city, $city_value,time() + (86400 * 30), "/");
// }
//  if(isset($_COOKIE[$cookie_username]) && isset($_COOKIE[$cookie_age]) && isset($_COOKIE[$cookie_city])) {

//   echo "Cookie Username'" . $cookie_username . "' is set!<br>";
//   echo "Cookie Username value'" . $username_value . "' is set!<br>";
//   echo "Cookie Age'" . $cookie_age . "' is set!<br>";
//   echo "Cookie Age value'" . $age_value . "' is set!<br>";
//   echo "Cookie City'" . $cookie_City . "' is set!<br>";
//   echo "Cookie City value'" . $city_value . "' is set!<br>"; -->

<?php
$cookie_name = "user";
$name_value = $_GET['username'];
$cookie_age = "age";
$age_value = $_GET['age'];
$cookie_city = "city";
$city_value = $_GET['city'];
setcookie($cookie_name, $name_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_age, $age_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_city, $city_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name]) && isset($_COOKIE[$cookie_age]) && isset($_COOKIE[$cookie_city])){
  echo "Name is: " . $_COOKIE[$cookie_name];
  echo "Age is: " . $_COOKIE[$cookie_age];
  echo "City is: " . $_COOKIE[$cookie_city];
}
 else{
     echo "cookies not set";
 }
?>


<!-- // }
// ?> -->
