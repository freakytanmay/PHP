<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_database</title>
</head>
<body>
    <h1>Registration Page</h1>
    <form action="#" method="post">
        Name: <input type="text" name="name" id=""> <br><br>
        Age: <input type="text" name="age" id=""> <br><br>
        City: <input type="text" name="city" id=""> <br><br>
        <input type="submit" value="Insert" name="insert"> &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Display" name="display">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Update" name="update">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Delete" name="delete">&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
</body>
</html>
<?php
class persondata
{       
         public $servername = "localhost:3307";
         public $username = "root";
         public $password = "password";
         public $database="persondb";
         public $conn;
        // Create connection
        //  public $conn= new mysqli($servername, $username, $password,$database);

        // Check connection
        public function __construct()
        {
            $this->conn= new mysqli($this->servername, $this->username, $this->password,$this->database); 
            if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "Connected successfully";
    }

    public function display()
    {
        
            $sql = "SELECT * FROM personinfo";
             $result = $this->conn->query($sql);

            if ($result->num_rows > 0) 
            {
            // output data of each row
            echo "<br>";
                while($row = $result->fetch_assoc()) 
                {
                    echo "Name: " . $row["name"]. " - Age: " . $row["age"]. " City :" . $row["city"]. "<br>";
                }
            }
            else 
            {
                echo "0 results";
            }
          
        
    }
    public function insert($name,$age,$city){
        $sql = "INSERT INTO personinfo (name,age,city)
        VALUES ('$name', '$age', '$city')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
      
    }
    public function update(){
        $sql = "UPDATE personinfo SET city='mumbai' WHERE name='Tanmay'";
        $sql2="select * from personinfo where age>30";
    if ($this->conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $this->conn->error;
}
            $result = $this->conn->query($sql2);

            if ($result->num_rows > 0) 
            {
            // output data of each row
            echo "<br>";
                while($row = $result->fetch_assoc()) 
                {
                    echo "Name: " . $row["name"]. " - Age: " . $row["age"]. " City :" . $row["city"]. "<br>";
                }
            }
            else 
            {
                echo "0 results";
            }
           
    }
    public function delete($name){
        $sql = "DELETE FROM personinfo WHERE name='$name'";

        if ($this->conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $this->conn->error;
        }
    } 

}

$obj=new persondata;
echo "<br>";
$name=$_POST['name'];
$age=$_POST['age'];
$city=$_POST['city'];
if(isset($_POST['display']))
{
    $obj->display();
}
if(isset($_POST['insert']))
{
    $obj->insert($name,$age,$city);
    echo "<br>";
    // $obj->display();
}
if(isset($_POST['update'])){
    $obj->update(); 
    echo "<br>";   
    // $obj->display();
}
if(isset($_POST['delete'])){
    $obj->delete($name);
    echo "<br>";
    // $obj->display();
}

