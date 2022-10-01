<!-- Create shape having a method area() which calculate the area of the
shape and return the area. Class circle inherits shape and override
the area() method and return the area of the circle. Class square
inherits the Shape class and have area() method ,return the area of
the square. Class Rectangle inherits the shape and have area()
method which returns the area of the square. Create the object of
shape ,circle ,squre and rectangle class and display area of each.
[ override the area() method] -->


<?php
class shape{
    public $Radius=2;
    public $Pi=3.14;
    public function area(){
        $this->Radius;
        $this->Pi;
    }
}
class circle extends shape{
    public $ans=0.0;
    public function area(){
        $r=$this->Radius;
        $pi=$this->Pi;
        $area=$pi * $r * $r;
        $this->ans=$area;
        echo "Circle area=". $this->ans . "<br>";
    }
}
class square extends shape{
    public $ans=0.0;
    public function area(){
        $r=$this->Radius;
        $area=4 * $r * $r;
        $this->ans=$area;
        echo "Sqaure area=". $this->ans . "<br>";
    }
}
class rectangle extends shape{
    public $ans=0.0;
    public $len=4;
    public $wid=5;
    public function area(){
        $len=$this->len;
        $wid=$this->wid;
        $ans=$len*$wid;
        $this->ans=$ans;
        echo "Rectangle area=" .$this->ans . "<br>";
    }
}

$circle=new circle;
$circle->area();
$sqaure=new square;
$sqaure->area();
$rectangle=new rectangle;
$rectangle->area();
?>