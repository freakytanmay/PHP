<!-- Create HTML form which takes the input of Employee name, 
age. Form having a drop down list to select the Employee type.
Developer /worker.
Create php script for following
Class Employee 
Property : name,age
Method : constructor() , display()
Class Developer inherits Employee
Property: skill[] array, salary, degree
Method: constructor, dispsalary() , dispkill() . 
Class Worker inherits Employee
Property : woringhr , perhrsprice
Methods : constructor , calsalary() dispsalary()
At the end based on drop down value it create the object of 
employee/manager / worker and display the details -->
<?php
class employee{
    public $name;
    public $age;
    public function __construct()
    {
        $this->name="Tanmay Dhandhukiya";
        $this->age=22;
    }
    public function display(){
        echo "Name=".$this->name."<br>";
        echo "Age=".$this->age."<br>";
    }
}
class developer extends employee{
    public $skill=array();
    public $salary;
    public $degree;

    public function __construct()
    {
        parent::__construct();
        $this->skill=array("frontend","backend","qa",);
        $this->salary=25000;
        $this->degree="MCA";
        echo "Name=".$this->name."<br>";
        echo "age=".$this->age."<br>";
    }
    public function dispsalary(){
        echo "Salary=".$this->salary."<br>";
        echo "Degree=".$this->degree."<br>";
    }
    public function dispskill(){
        echo "Skills=";
        foreach($this->skill as $i){
           echo " " .$i ;
        }
    }

}
class worker extends employee{
    public $workhour;
    public $priceperhour;
    public $sal=0;

    public function __construct()
    {
        parent::__construct();
        $this->workhour=8;
        $this->priceperhour=100;
        echo "Name=".$this->name."<br>";
        echo "age=".$this->age."<br>";
    }
    public function calsal(){
        
        $this->sal=$this->workhour * $this->priceperhour;
    }
    public function caldisp(){
        echo "total salary=".$this->sal."<br>";
    }
}
if(isset($_POST['submit'])){
    $select=$_POST['emp'];
    if($select=="dev"){
    $obj1=new developer();
    $obj1->dispsalary();
    $obj1->dispskill();
    }
    else{
        $obj2=new worker();
        $obj2->calsal();
        $obj2->caldisp();
    }
}


?>