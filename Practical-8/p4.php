<!-- Create a class Item
Property : Itemname,Ino
Method : display -> display item name and ino
Class Category : inherits Item
Property : categoryname[e.g cloth/electronics/kids toys.. etc] ,
subcategory[eg mobile,laptop,jeans,tshir] , price
Method: displayItem() -> display category,subcategory and price.
Getprice() -> return the price of item
Class purchase inherits Item
Property : purchaseid, totalamount ,qty
Method : calorderamout() : calculate and return the totalamount
(qty*price) displaypurchase() : display the all details of Item and
category class.

Write php script which create necessary constructor and create a
object of purchase class. Calculate the totalorder amount. It also
display the details purchase -->
<?php
class item{
    public $Itemname='Cloths';
    public $Ino=10;
    public function __construct()
    {
        echo "Item Name". $this->Itemname ."<br>";
        echo "Item No". $this->Ino. "<br>";
    }
}
class category extends item{
    public $categoryname;
    public $subcategory;
    public $price;
    public function __construct()
    {
        $this->categoryname="Cloths";
        $this->subcategory="jeans";
        $this->price="10000";
    }
    public function Getprice(){
        return $this->price;
    }
    public function displayItem(){
        echo "Item Name". $this->Itemname."<br>";
        echo "Item No". $this->Ino."<br>";
        echo "Category Name=" . $this->categoryname."<br>";
        echo "SubCategory Name=". $this->subcategory."<br>";
        echo "Price". $this->price."<br>";
    }
}
class purchase extends category{
    public $purchaseid=123;
    public $totalamount=0;
    public $qty=100;
    public function calorderamout(){
        $this->totalamount=$this->qty * $this->price;
    }
    public function displaypurchase(){
        echo "Item Name". $this->Itemname."<br>";
        echo "Item No". $this->Ino."<br>";
        echo "Category Name=" . $this->categoryname."<br>";
        echo "SubCategory Name=". $this->subcategory."<br>";
        echo "Price". $this->price."<br>";
        echo "Purchase Id=".$this->purchaseid."<br>";
        echo "Quantity=".$this->qty."<br>";
        echo "Total Amount=".$this->totalamount."<br>";

    }
}
$obj = new purchase();
$obj->Getprice();
echo "<h1>Class Category</h1>";
$obj->displayItem();
echo "<h1>Class Purchase</h1>";
$obj->calorderamout();
$obj->displaypurchase();
?>