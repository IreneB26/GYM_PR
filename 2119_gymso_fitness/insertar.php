<?php


include ("Conecta.php");
$link=Conectarse();




//$res = mysqli_query("SELECT correo FROM usuarios WHERE correo = '$correo'");

//while ($correos=mysqli_fetch_array($res)) {
 //  echo $correos ;
 
 //    $query =mysqli_query($link,"SELECT email FROM ['tabla'] WHERE email = '{$correo}' ");

//if(!$query){
    // Haz lo que quieras con tus datos
//}

//return "Este email ya existe";





//mysqli_query ($link, "insert into usuarios (Nombre_us,Correo_us,Edad_us,Contrasena_us) values ('$_POST[nombre]','$_POST[correo]','$_POST[edad]','$password')");

/*($link, "insert into loging (nombre,correo,clave) values ('$_GET[nombre]','$_GET[correo]','$_GET[clave]')");
 /*($link, "insert into loging(nombre,correo,clave) values ('$_POST[nombre]','$_POST[correo]','$_POST[clave]')");*/
/*($link, "insert into loging(nombre,correo,clave) values ('paco','paco@gmail.com','paco123')");*/






// FORO

if(isset($_POST["submit"])){
    if(!empty($_POST['mensaje'])){
        $autor=$_POST['autor'];
        $titulo=$_POST['titulo'];
        $mensaje=$_POST['mensaje'];
        $respuestas=$_POST['respuestas'];
        $identificador=$_POST['identificador'];
        $fecha = date("d-m-y");
        
       // $autor= mysqli_query ($link, "SELECT Nombre_us FROM  usuarios WHERE Email = '$_SESSION'");
   
        
        //Evitamos que el usuario ingrese HTML
        $mensaje = htmlentities($mensaje);
        echo "identificador:";
        echo $identificador;
        
        //Grabamos el mensaje en la base de datos.
        $result=mysqli_query($link, "INSERT INTO foro (autor, titulo, mensaje, identificador, fecha, ult_respuesta) VALUES ('$autor', '$titulo', '$mensaje', '$identificador','$fecha','$fecha')");
        echo $result;
        echo "identificador:";
        echo $identificador;
        
        /* si es un mensaje en respuesta a otro actualizamos los datos */
        if ($identificador != 0)
        {
           $result2=mysqli_query($link, "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador')");
            echo $result2;
            Header("Location: foro.php?id=$identificador");
            exit();
        }
        Header("Location: index_foro.php");
    }
}




//compra

// if(isset($_POST["submit"])){   
//         $direccion=$_POST['direccion'];
//         $localidad=$_POST['localidad'];
//         $CP=$_POST['CP'];
//         $telefono=$_POST['telefono'];
        
//         if(isset($_SESSION['user'])){
//             $email=$_SESSION['user'];
        
//             $u_id = mysqli_query("SELECT ID_us FROM usuarios WHERE Correo_us = '$email'");}
       
        
        
//         // $autor= mysqli_query ($link, "SELECT Nombre_us FROM  usuarios WHERE Email = '$_SESSION'");
        
        
       
//         $mensaje = htmlentities($mensaje);
       
        
        
//         $result=mysqli_query($link, "INSERT INTO envio (ID_us, Direccion, localidad, CP, telefono) VALUES ('$u_id','$direccion', '$localidad', '$CP', '$telefono')");
        
        
        
// }
// Header("Location: tienda.php");

?>