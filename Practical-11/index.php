<?php
// $controller ="homecontroller";
// $function="home";

// if(isset($_GET['controller'])&&$_GET['controller']!=''){
//     $function=$_GET['controller'];
// }
if(isset($_GET['function'])&&$_GET['function']!=''){
    $function=$_GET['function'];
    include("controller/home-controller.php");
    $obj=new homecontroller();
    if($function=='home'){
        $obj->home();
    }
    else if($function=='about'){
        $obj->about();
    }
    else if($function=='contact'){
        $obj->contact();
    }
    else{
        $obj->error();
    }
}

?>
