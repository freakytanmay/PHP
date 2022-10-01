<!-- Create a class stack having a property called value(array), as well as
having a push ,pop and and display method.
Display method display the element of array.
[Note : for deleting element replace the respective value with ‘0’].
Create a object of stack and perform push, pop, and display operation
on object.
Create proper HTML form which input the value to be push. Display
stack element in table format.
Take necessary variable required to perform operation. Throw
an exception when trying to push the element from empty
array. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" name="num" id="">
    <input type="submit" value="submit">
</body>
</html>

<?php
class stack{
    public $top=-1;
    public $arr=array();
    public function push($num){
        if(count($this->arr)>=4){
            echo "Stack Overflow";
        }
        $this->stack[++$this->top]=$num;
        echo "added";
    }
    public function pop(){
        if($this->top==-1){
            echo "Stack Underflow";
        }
        $x=$this->arr[$this->top--];
        echo "delete element $x";
    }   
    public function display(){
        // for($i=0; $i<count($this->arr); $i++){
        //     echo $i .  ".";
        // }
        print_r($this->arr);
    }
}
$obj=new stack;
$obj->push(2);
$obj->display();    
?>