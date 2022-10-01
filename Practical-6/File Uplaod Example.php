
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
    //   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $tmp = explode('.', $file_name);
     $file_extension = end($tmp);
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_extension,$extensions)=== false){
         $errors[]="Error<br>";
        //  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
         echo "<h4>extension not allowed, please choose a JPEG or PNG file.</h4>";
        // $errors[]="Error";
         
    }
      
      if($file_size > 2097152){
        $error[]="Error <br>" ;
        //  $errors[]='File size must be excately 2 MB';
         echo'<h4>File size must be excately 2 MB </h4>';
        // $error[]=1;

      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"student/".$file_name);
         echo "<h3>File Uploaded Successfully</h3>";
      }
    //   else{
    //      print_r($errors);
    //   }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
		
      </form>
      
   </body>
</html>