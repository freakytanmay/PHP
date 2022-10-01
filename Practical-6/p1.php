<?php
//  Develop a PHP form to get students marks of 5 subject and generate
//  result. Take the following inputs: Exam No, Course (Drop Down),
//  Student photo and Semester. The photo should not be greater than 25
//  kb in size and must be in JPEG format. Check necessary validation
//  and provide the option to upload the photograph on click on upload
//  button. Display the rest of the detail on browser on click on submit
//  button.
if(isset($_POST['submit'])){
    echo "Exam No=". $_POST['examno'] ."<br>";
    $select = $_POST['course'];
    echo "Course Name= $select <br>" ;
    echo "Subject 1=" . $_POST['sub1']. "<br>";
    echo "Subject 2=" . $_POST['sub2']. "<br>";
    echo "Subject 3=" . $_POST['sub3']. "<br>";
    echo "Subject 4=" . $_POST['sub4']. "<br>";
    echo "Subject 5=" . $_POST['sub5']. "<br>";

    if(isset($_FILES['stud'])){
        $errors= array();
        $file_name = $_FILES['stud']['name'];
        $file_size =$_FILES['stud']['size'];
        $file_tmp =$_FILES['stud']['tmp_name'];
        $file_type=$_FILES['stud']['type'];
      //   $file_ext=strtolower(end(explode('.',$_FILES['stud']['name'])));
        $tmp = explode('.', $file_name); //break the string into two parts
       $file_extension = end($tmp); //ends array like file output
        $extensions= array("jpeg","jpg");
        
        if(in_array($file_extension,$extensions) === false){
           $errors[]="Error<br>";
          //  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
           echo "<h4>extension not allowed, please choose a JPEG or JPG file.</h4>";
          // $errors[]="Error";
           
      }
        
        if($file_size < 25600){
        $errors[]='Error <br>';
        //  $errors[]='File size must be excately 2 MB';
        echo '<h4>File size must be excately 25 KB </h4>';
          // $error[]=1;
  
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"images/".$file_name);
           echo "<h3>File Uploaded Successfully</h3>";
        }
         echo "File Name=$file_name <br>";  
         echo "File Size=$file_size<br>";  
         echo "File Type=$file_type<br>";
        // else{
        //     print_r($errors);
        // }
    }
}