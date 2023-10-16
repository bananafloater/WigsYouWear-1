<?php
   if(isset($_FILES['stuff'])){
      $errors= array();
      $file_name = $_FILES['stuff']['name'];
      $file_tmp =$_FILES['stuff']['tmp_name'];

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="/up.php" method="POST" enctype="multipart/form-data">
         <input type="file" multiple id="stuff">
         <input type="submit"/>
      </form>
      
   </body>
</html>