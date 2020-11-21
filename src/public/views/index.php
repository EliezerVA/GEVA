<?php

$titulo= $_POST['Titulo'];
$contenido = $_POST['Contenido'];
$comentada= "Javier45 10 de noviebre";


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



$sql="INSERT INTO posts (post_content,post_res,post_view,post_ulres) VALUES ('$contenido','5','4','$comentada')";

if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn)

 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/popup.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet'>

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





    <div class="content">

        <a id="Hola" href="#" style="position: relative; top: 135px; float: right; right: 7%;">Agregar Hilo</a>






        <nav class="navbar navbar-expand-lg " style="background:#00035E;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </but
            <h3 class="fa-noti"><i class="fa fa-bell fa-x4" style="color: white;" aria-hidden="true"></i></h3>
            <h3 class="fa-comen"><i class="fa fa-commenting-o" style="color: white;" aria-hidden="true"></i></h3>
            <h3 class="fa-us"><i class="fa fa-user" style="color: white;" aria-hidden="true"></i></h3>
            <h3 class="colap"><i class="fa fa-caret-down fa-x5" style="color: white;" aria-hidden="true"></i></h3>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <h4 class="nam-user" style="color: white; font-family: 'Courier New', Courier, monospace;">Anonimo</h4>
                <a class="navbar-brand" href="#"
                    style="color:#ffff;  font-family: 'Bubblegum Sans';font-size: 30px; position: absolute; left: 3%;">Hogama</a>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" style="background-color: #5C5EB5; color:white;"
                        id="place" placeholder="Search" aria-label="Search">

                </form>
            </div>
        </nav>

        <div class="table-content">
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col" style="  font-family: 'Coming Soon';font-size: 22px;">Temas</th>
                    <th scope="col" style="  font-family: 'Coming Soon';font-size: 22px;">Respuestas</th>
                    <th scope="col" style="  font-family: 'Coming Soon';font-size: 22px;">Vistas</th>
                    <th scope="col" style="  font-family: 'Coming Soon';font-size: 22px; text-align: right;">Ultimo
                        Mensaje</th>
                </thead>
                <tbody class="user-waitlist">

                    <?php

$server ="localhost";
$database= "hoga";
$user= "Eli";
$pass= "root";

$conn2 = mysqli_connect($server, $user,$pass,$database);
if(!$conn2){
    die("Connection failed: ".mysqli_connect_error());
}



                $sql2="SELECT * FROM posts";
                $resul= mysqli_query($conn2,$sql2);

                while($mostrar=mysqli_fetch_array($resul)){


                ?>
                    <tr>
                        <td><?php  echo $mostrar['post_content']?> </td>
                        <td><?php  echo $mostrar['post_res']?></td>
                        <td><?php  echo $mostrar['post_view']?></td>
                        <td><?php  echo $mostrar['post_ulres']?></td>
                    </tr>
                    <?php



                }

                if(mysqli_query($conn2,$sql2)){
                    
                }else{
                    echo"Error: ".$sql2 . "<br>". mysqli_error($conn2);
                }
                mysqli_close($conn2)
                ?>



                </tbody>



            </table>
        </div>
        <div class="form-1">
            <form action="" method="post">
                <input type="text" name="Titulo" placeholder="Titulo"
                    style="left: 0%; width: 80%; top: 10px; position: relative;" require>
                <br>
                <textarea name="Contenido" id="" cols="15" rows="10"
                    style=" height: 80px; position: relative; top: 30px; width: 80%; left: 1%;"
                    placeholder="Contenido del tema" require></textarea>
                <input type="submit" value="Enviar" style="position: absolute; top: 150px; right: 20%;">


            </form>
        </div>



    </div>

</body>

<script src="../js/popup.js"></script>





</html>