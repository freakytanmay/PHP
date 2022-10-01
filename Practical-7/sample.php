<?php
    class book{
        public $price=0;
        public $title="";
        public function setvalue($p,$t):void{
            $this->price=$p;
            $this->title=$t;
        }
        public function display():void{
            echo $this->price;
            echo $this->title;
        }
    }
?>
<?php
    $b1=new book();
    $b1->setvalue(100,'php');
    $b1->display();
?>
