<?php
 session_start();
 session_unset();
 session_destroy();
 echo "Login is Reqired";
?>