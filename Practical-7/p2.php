<!-- Create php script for following
Create a class Food. Having a property name,category and price.
Create a constructor which assign the values to the properties. Class
have a method order() which takes the quantity and calculate the
total price . Display() will display all food details as well as total price
of a food item. Gettotalprice() return the total price of each food item
(price*qty) (*qty and total price are not class variable)
Give all necessary input by the HTML form. And display output on
HTML form. Take necessary input of three food items from HTML
form. [ 3 objects of a class should be created] . Create a php function
which calculate final sum of all the object’s total price and display. -->
<?php
 class food{
      public $name='';
      public $category='';
      public $price=0;
      public $totalprice=0;
      public $quantity=0;
      function __construct($n,$c,$p){
            $this->name=$n;
            $this->category=$c;
            $this->price=$p;        
      }
      public function order($q){
        $pp=0;
        $tot1=0;
        $pp=$this->price;
        $tot1=$q*$pp;
        $this->quantity=$q;
        $this->totalprice=$tot1;
            
      }
      public function display(){
        echo "Food Name=". $this->name . "<br>";
        echo "Food Category=". $this->category. "<br>";
        echo "Food Quantity=". $this->quantity. "<br>";
        echo "Food Price=". $this->price. "<br>";
        echo "Food Total-Price=". $this->totalprice. "<br>";

      }
      public function Gettotalprice(){
        return $this->totalprice;
      }
    }
if(isset($_POST['f1'])){
    echo "<h1>Food-1</h1>";
    $fname=$_POST['fname'];
    $fcat=$_POST['fcat'];
    $fprice=$_POST['fprice'];
    $fquan=$_POST['fquan'];
    $b1=new food($fname,$fcat,$fprice);
    $b1->order($fquan);
    $b1->display();


    echo "<h1>Food-2</h1>";
    $fname2=$_POST['fname2'];
    $fcat2=$_POST['fcat2'];
    $fprice2=$_POST['fprice2'];
    $fquan2=$_POST['fquan2'];
    $b2=new food($fname2,$fcat2,$fprice2);
    $b2->order($fquan2);
    $b2->display();

    echo "<h1>Food-3</h1>";
    $fname3=$_POST['fname3'];
    $fcat3=$_POST['fcat3'];
    $fprice3=$_POST['fprice3'];
    $fquan3=$_POST['fquan3'];
    $b3=new food($fname3,$fcat3,$fprice3);

    $b3->order($fquan3);
    $b3->display();

    echo "Total Price =========> ";
    echo $b1->Gettotalprice() + $b2->Gettotalprice() + $b3->Gettotalprice();
}


?>