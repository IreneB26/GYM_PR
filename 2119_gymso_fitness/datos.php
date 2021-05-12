<?php 

include ("Conecta.php");
$link=Conectarse();



//compra

if(isset($_POST["submit3"])){   
    $total=$_POST['total'];
    $ID=$_POST['id'];
    $nombre=$_POST['full_name'];
    $calle1=$_POST['street1'];
    $calle2=$_POST['street2'];
    $ciudad=$_POST['city'];
    $provincia=$_POST['state'];
    $CP=$_POST['zip'];


    mysqli_query($link, "INSERT INTO pedidos (id_US, Total, Nombre_com, Direccion_1, Direccion_2, Ciudad, Provincia, CP) VALUES ('$ID','$total','$nombre','$calle1','$calle2','$ciudad','$provincia','$CP')");
  
 
    
    //  if(isset($_SESSION['user'])){
    //     $email=$_SESSION['user'];
    
    //     $u_id = mysqli_query("SELECT ID_us FROM usuarios WHERE Correo_us = '$email'");}
   
    
    
    // $autor= mysqli_query ($link, "SELECT Nombre_us FROM  usuarios WHERE Email = '$_SESSION'");
    
    
   
    // $mensaje = htmlentities($mensaje);
   
    
    
    // $result=mysqli_query($link, "INSERT INTO envio (ID_us, Direccion, localidad, CP, telefono) VALUES ('$u_id','$direccion', '$localidad', '$CP', '$telefono')");
    
    
    
}
Header("Location: pago.php?precio=$total");

?>