<?php
if(isset($_POST['write'])){
 $filename = $_POST['fname'];
 $file = fopen( $filename, "a" );
 
 if( $file == false ) {
    echo ( "Error in opening new file" );
    exit();
 }
 $content=$_POST['str'];
 fwrite($file,$content);
 fclose($file);
 echo "Writing into file is successfully compelete";
}

if(isset($_POST['read'])){
    $filename = $_POST['fname'];
    $file = fopen( $filename, "r" );
    
    if( $file == false ) {
       echo ( "Error in opening file" );
       exit();
    }
    
    $filesize = filesize( $filename );
    $filetext = fread( $file, $filesize );
    
    fclose( $file );
    
    echo ( "File size : $filesize bytes" );
    echo ( "$filetext" );
    echo("file name: $filename");
}
?>