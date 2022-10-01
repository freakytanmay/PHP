
<!-- Create PHP script for a custom error handling function in which two
parameters are passed. If first parameter is less than second
parameter then it should display warning. If any of the parameters is
not a number then it should generate fatal error -->
<?php

// Creates my error function which prints message
//to user
function myerror($E_ERROR, $error_msg) {
   
	echo "Error: [$E_ERROR] $error_msg ";
	echo "\n Warning";
    
	
	// When error occurred script has to be stopped
	die();
}

// Setting set_error_handler
set_error_handler("myerror");
$a=10;
$b=20;
if($a<$b){
    echo "Warning : first value is less than second";
}
if(!is_numeric($a) || !is_numeric($b)){
    echo "fatal error: is not and numeric value";
}
?>
