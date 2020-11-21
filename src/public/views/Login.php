<?php






?>


<?php


$name= $_POST['nombre'];
$email = $_POST['correo'];
$pass3= $_POST['contra'];


$server ="localhost";
$database= "hoga";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
   
}



$sql="INSERT INTO users (username,user_pass,user_email) VALUES ('$name','$pass3','$email')";

if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn)




 

?>


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
   
   
   
 
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['Correo2']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 

      
      $sql = "SELECT * FROM users WHERE user_email='$myusername' and user_pass= '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         
         header("location: ses.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/314aa313ca.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>







    <div class="bg-modal">
        <div class="modal-content">



            <h3 class="h2" style="font-family: 'Bubblegum Sans';">¿Tienes cuenta?</h3>
            <h1 class="h1" style="font-family: 'Bubblegum Sans';">Hogama</h1>
            <div class="line-2"></div>
            
            <form class="formas" action="" method="post">
                <div class="form-group">
                   
                    <input name="Correo2" style="width: 290px;  border-radius: 5%; font-family: 'Bubblegum Sans';" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    
                </div>
                <div class="form-group">
                    
                    <input name="Password"  style="width: 290px; border-radius: 5%; font-family: 'Bubblegum Sans';" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <a href="#"><h6>¿Olvidaste la contraseña?</h6></a>
                </div>
                
                <button style=" width: 290px; background-color: rgb(25, 25, 102) ;" type="submit" class="btn btn-success" style="border-radius: 20%;">Iniciar Sesion</button>
            </form>

            <h3 class="re" style="font-family: 'Bubblegum Sans';">Registrate</h3>


            <form class="formas-2" action="" method="post">
                <div class="form-group">

                    <input  name="nombre" style="width: 290px;  border-radius: 5%; font-family: 'Bubblegum Sans';" type="text" class="form-control" id="exampleInputname" aria-describedby="text"
                    placeholder="Enter name" >
                    <input name="correo" style="width: 290px;  border-radius: 5%; font-family: 'Bubblegum Sans'; margin-top: 10px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    
                </div>
            
               
               
               
                <div class="form-group">
                    
                    <input name="contra" style="width: 290px; border-radius: 5%; font-family: 'Bubblegum Sans';" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                    
                </div>
                
                <button style= "width: 290px;  background-color: rgb(25, 25, 102) ;" type="submit" class="btn btn-success" style="border-radius: 20%;">Registrarte</button>
            </form>
        </div>


    </div>






</body>

</html>