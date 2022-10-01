<!-- Write php script for following
Create a class course having properties coursename,noofyear. Create 
setter and getter public methods for each property.
Create a student class which inherits the course class. 
Student class have name,passoutyear,resultclass properties . 
Student 
class contain public method setvalue() which set all the 
properties value. And display() which display all the values. Create 
four different object of student class and display details of each 
object. -->

<?php
    class course{
        public $coursename='';
        public $noofyear=0;

        public function setter(){
            $this->coursename="computer science";
            $this->noofyear="3";
        } 
        public function getter(){
            return  $this->coursename;
            return $this->noofyear;
        }
    }
    class student extends course{
        public $name='';
        public $passoutyear=0;
        public $result=0;

        public function setvalue(){
            $this->name="Tanmay Dhandhukiya";
            $this->passoutyear=2023;
            $this->result=90;
        }
        public function display(){
            echo "Course Name=" . $this->coursename ."<br>";
            echo  "No Of Year=" . $this->noofyear."<br>";
            echo "Student Name=" . $this->name."<br>";
            echo "PassOut Year=" . $this->passoutyear."<br>";
            echo "Result=".$this->result."<br>";
        }
    }
   $c=new student();
   $c->setter();
//    $c->getter();
   $c->setvalue();
   $c->display();

?>