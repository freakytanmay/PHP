<?php
    class homecontroller{
        private $obj;

        function __construct()
        {
            include("Model/modelclass.php");
            $this->obj= new model();
        }
        function home(){
            echo "home";
            $arr=$this->obj->modelhome();
            echo $arr;
            include("View/header.php");
            include("View/page.php");
            include("View/footer.php");
           
        }
        function about(){
            $arr=$this->obj->modelabout();
            echo $arr;
            include("View/header.php");
            include("View/About.php");
            include("View/footer.php");
        }
        function contact(){
            $arr=$this->obj->modelcontact();
            echo $arr;
            include("View/header.php");
            include("View/contact.php");
            include("View/footer.php");  
        }
        function error(){
            include("View/header.php");
            include("View/Erro.php");
            include("View/footer.php"); 
        }
    }
?>