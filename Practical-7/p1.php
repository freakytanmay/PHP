<!-- Create a HTML form which takes bankaccount number, amount
value for deposit or withdrawal operation. It two button withdrawal
and deposit. On click on button it perform respective operation .
create a bank class having a property accno and amount and
methods for deposit , withdrawal and for display the accno and
current amount. On click on the withdrawal or deposit button it
create a object of bank class and should call respective method of a
class. And display the account no and current available amount -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p1</title>
</head>
<body>
    <h1>Current Balance in Account==1000</h1>
    <form action="#" method="post">
    bankaccount: <input type="text" name="bankacc" id="">
    amount: <input type="number" name="amt" id="">
    <input type="submit" name="withdraw" value="withdraw">
    <input type="submit" name="deposite" value="Deposite">
    </form>
</body>
</html>
<?php
    class Bank{
        public $curramt=1000;
        public function deposit($a):void{
            $this->curramt=$this->curramt+$a;
            // echo "Current Balance After Deposite $depo";

        }
        public function withdraw($a):void{
            if($a>$this->curramt){
                echo "In Sufficient Balance";
                exit();
            }
            $this->curramt=$this->curramt-$a;
        }
        public function display($b){
            echo "Bank Account Number $b" . "<br>";
            echo "Current Balance " . $this->curramt;

        }
    }
?>
<?php
    $b=new Bank();
    if(isset($_POST['deposite'])){
        $accno=$_POST['bankacc'];
        $amt=$_POST['amt'];
       
        $b->deposit($amt);
        $b->display($accno);
    } 
    if(isset($_POST['withdraw'])){
        $accno=$_POST['bankacc'];
        $amt=$_POST['amt'];
        $b->withdraw($amt);
        $b->display($accno);
    }   
?>
