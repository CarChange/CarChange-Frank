<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $cpf  = mysqli_real_escape_string($conn,$_POST['user']);
      $nasc = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = login_q($cpf, $nasc);
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("cpf");
         $_SESSION['login_user'] = $cpf;
         
         header("location: welcome.php");
      }else {
         $error = "CPF ou data de nascimento errados!";
      }
   }
?>