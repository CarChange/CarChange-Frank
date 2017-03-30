<?php
   include 'config.php';
   include 'query.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn, session_q($user_check));
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id_cliente'];
   
   if(!isset($_SESSION['login_user'])){
       echo "<script>
                alert('Por gentileza, realize o login na pagina inicial.');
                window.location.href='index.html';
            </script>";
      header("location: index.html");
   }
?>