<?php
   $server ="localhost";
   $database= "hoga";
   $user= "Eli";
   $pass= "root";
   
   $conn = mysqli_connect($server, $user,$pass,$database);
   
   if(!$conn){
       die("Connection failed: ".mysqli_connect_error());
      
   }
   
   echo "Se conecto";
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>