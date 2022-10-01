<!-- Create php program for the following
Create a class Course having property coursename, noofyear
 And constructor , and display() method for the display course
information.
Create class student inherits the having studid, studname, array of
marks(3 subject). Class contains the constructor and called the
parent constructor. Class contains method caltotal() which returns
the total of 3 subject marks. It contains display method which
shows all the information about the students:
name,id,marks,total,coursename,noofyear -->
<?php
class course{
    public $coursename;
    public $noofyear;
    
    public function __construct()
    {   
        $this->coursename="MCA";
        $this->noofyear=2;
    }
    public function display(){
        echo "Course Name=". $this->coursename. "<br>";
        echo "No of Year=". $this->noofyear. "<br>";
    }
}
class student extends course{
    public $studid;
    public $studname;
    public $marks=array(95,90,98);
    public $sum=0;
    public function __construct(){
        parent::__construct();
        $this->studid="MA051";
        $this->studname="Tanmay Dhandhukiya";
    }
    public function caltotal(){
        $val=array();
        $val=$this->marks;
        $this->sum=array_sum($val);
        }
    
    public function student_display(){
        echo "Student Id=". $this->studid."<br>";
        echo "Student Name=". $this->studname."<br>";
        echo "Student Madrks=";
        print_r($this->marks);
        echo "<br>Student Total Marks=". $this->sum."<br>";
        echo "Student Course Name=". $this->coursename."<br>";
        echo "Student No of Year=". $this->noofyear."<br>";
    }
}

$obj= new student;
// $obj->display();
$obj->caltotal();
$obj->student_display()

?>