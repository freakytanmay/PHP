<!-- Create a php script which having triggers on the error if the number
entered by user is negative then it trigger the warning with appropriate
message. -->
<?php
$test=-2;
if ($test<0) {
  trigger_error("Value is Negative",E_USER_WARNING);
}
?>