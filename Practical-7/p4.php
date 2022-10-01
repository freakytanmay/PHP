<!-- Create a class vehicle having properties prodyear,company name. 
And protected method for setting and getting values. 
Create subclass twowheeler inherits from vehicle . properties are 
nameofvehical, color. It contains methods setvalues() and getvalues() 
which set the values of all properties and display it respectivally.
Create a subclass fourwheeler inherits from vehicle class.
Properties are vehiclename,color,price,tolltaxrate . It contains 
constructor which set all the properties. Display() method for display 
the details. 
Create a object of twowheeler and fourwheeler and display all the 
details for both the object -->

<?php
class vehicle
{
    public $prodyear = 0;
    public $companyname = '';

    protected function setvalue()
    {
        $this->companyname = "Tata Motors";
        $this->prodyear = "2022";
    }
    protected function getvalue()
    {
        return $this->companyname;
        return $this->prodyear;
    }
    public function access(){
            return $this->setvalue();
    }
}
class twowheeler extends vehicle
{
    public $vehicalname = '';
    public $color = '';

    public function t_setvalue()
    {
        $this->vehicalname="jupyter";
        $this->color="blue";
    }
    public function t_getvalue()
    {
        
        echo "Company Name=" .$this->companyname."<br>";
        echo "Product Year=".  $this->prodyear."<br>";
        echo "Vehical Name=". $this->vehicalname."<br>";
        echo "Color=" . $this->color."<br>";

}
}
class fourwheelr extends vehicle{
    public $vehicalname = '';
    public $color = '';
    public $price=0;
    public $Talltaxprice=0;

    function __construct()
    {
        $this->vehicalname="Tata Nexon";
        $this->color="Black";
        $this->price=750000;
        $this->Talltaxprice=3000;
    }
    function display(){
        echo "Comapany Name=" . $this->companyname. "<br>";
        echo "Product Year=" . $this->prodyear. "<br>";
        echo "Four Wheel Vechical=" . $this->vehicalname . "<br>";
        echo "Car Color=" . $this->color . "<br>";
        echo "Car Price=".$this->price . "<br>";
        echo "Tall Tax Price=" . $this->Talltaxprice . "<br>";
    }
}
echo "<h1>TWO WHEELER VEHICAL</h1> <br>";
$t=new twowheeler();
$t->access();
$t->t_setvalue();
$t->t_getvalue();
echo "<h1>FOUR WHEELER VEHICAL</h1> <br>";
$f=new fourwheelr();
$f->access();
$f->display();

?>
