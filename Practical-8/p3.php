<!-- Write a PHP code for the following
Create a abstract class Employee. Having constructor for the setting
name, and designation. Create appropriate method to display the
details. Create abstract method calsal() in Employee class .
Create a class Manager inherits the Employee class. It having a
property of basic,da,taxamount property. Create the constructor for
set the the values. Implement the calsal() (basic+da – taxamount).
Create class worker inherits the Employee class. Create constructor
which set the property wagesperhour,workedhour. Implement
calsal() method (wagesperhour*workedhour) .
Create appropriate methods in respective class to display the
details.
Write a php program which create the object of Manager and Worker
class, and display the name, designation and salary of each -->

<?php
abstract class employee{
    public $name ;
    public $designation ;
    public function __construct()
    {
        $this->name="Tanmay Dhandhukiya" ."<br>";
        $this->designation="Software Developer" ."<br>";
    }
    abstract public function calsal();


} 
class Manager extends employee{
    public $basic=0;
    public $da=0;
    public $taxamount=0;
    public $ans=0;
    public function __construct()
    {
        parent::__construct();
        $this->basic=10000;
        $this->da=100;
        $this->taxamount=100;
        
    }
    public function calsal(){
        echo $this->name;
        echo $this->designation;
        $ans=($this->basic + $this->da - $this->taxamount);
        echo "ANSWER=". $ans ."<br>";

    }
}
class worker extends  employee{
    public $wagesperhour=0;
    public $workedhour=0;
    public function __construct()
    {
        parent::__construct();
        $this->wagesperhour=10;
        $this->workedhour=10;
    }
    public function calsal(){
        echo $this->name;
        echo $this->designation;
        $ans=$this->wagesperhour * $this->workedhour;
        echo "Answer=". $ans ."<br>";
    }
}
$obj1= new Manager();
$obj2=new worker();

$obj1->calsal();
$obj2->calsal();
?>