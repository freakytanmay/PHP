<!-- Create an interface called operation having a method 
plus(),minus(),div(),mul().
Create a class Arithmetic having property x and y 
Implements the method of interface to perform arithmetic 
operations on two values and display answer.
Create class called String having property str1 and str2.
Implements the method of operation interface 
Plus() : concate two string and display the answer.
Minus() : find out the position of str2 in str1.
Mul() : find out the number of occurrence of str2 in str1.
Div() : find out the last word form str1. -->
<?php
interface operation{
  
    public function plus();
    public function minus();
    public function mul();
    public function div();
  
}
  
class Arithmetic implements operation{
    public $x=10;
    public $y=20;
    public function plus(){
       $add=$this->x+$this->y;
       echo "Addtion=$add <br>";
    }
  
    public function minus(){
        $add=$this->x-$this->y;
       echo "Subtract=$add <br>";
    }
    public function mul(){
        $add=$this->x+$this->y;
       echo "multification=$add <br>";
    }
    public function div(){
        $add=$this->x+$this->y;
       echo "division=$add <br>";
    }
} 
class String1 implements operation{
    public $str1="hello tanmay hello";
    public $str2="tanmay";
    public function plus(){
      echo "concate two string and display the answer=".$this->str1 .$this->str2 . "<br>";
    }
  
    public function minus(){
       echo "find out the position of str2 in str1=". strpos($this->str1,$this->str2) . "<br>";
       
    }
    public function mul(){
       echo "find out the number of occurrence of str2 in str1=".substr_count($this->str1,$this->str2). "<br>";
    }
    public function div(){
        $l=strlen($this->str1);
        $str1=$this->str1;
        echo "find out the last word form str1=" . $str1[$l-1];
    }

}
  
$obj = new Arithmetic();
$obj->plus();
$obj->minus();
$obj->mul();
$obj->div();

$obj1 = new String1();
echo "String1=".$obj1->str1 ."<br>";
echo "String2=".$obj1->str2."<br>";
$obj1->plus();
$obj1->minus();
$obj1->mul();
$obj1->div();


?>