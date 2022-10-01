<?php
 $location = array("tanmay" => "anand","satyam" => "vadhvan","ayush" => "nadiad");

 echo $location['tanmay'];
echo "<br>"; 
 
foreach($location as $key=>$value){
    echo $key . "=>" . "$value" ."<br>";
}
//second method for creating array 

 $number["1"]="one";
 $number["2"]="two";
 $number["3"]="three";

 echo $number["1"];

 
 ?>