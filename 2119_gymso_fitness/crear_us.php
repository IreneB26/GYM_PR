<?php 
include('cabecera.php');
?>

<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

					<div class="mt-lg-5 mb-lg-0 mb-4   mx-auto">


<!-- Estilos -->

<h3 data-aos="fade-up" data-aos-delay="200">Introduzca sus datos en el formulario para crear el usuario:</h3></br>
			
			
<FORM ACTION="crear_us.php" METHOD="POST" class="contact-form webform" data-aos="fade-up" data-aos-delay="300">

Nombre:
<INPUT TYPE="text" NAME="nombre" class="form-control" required>

Correo:
<INPUT TYPE="text" NAME="correo" class="form-control" required>

Edad:
<INPUT TYPE="text" NAME="edad" class="form-control" required>

Contraseña:
<INPUT TYPE="password" NAME="clave" class="form-control" required>



<INPUT TYPE="submit" class="btn btn-danger" NAME="submit" VALUE="Enviar" style="width:150px;height:50px;border-radius: 30px;">

</FORM>

<script>
function changePage(whereToGo, messageText)
{
    alert(messageText);
    window.location=whereToGo;
}
</script>


<?php 

include ("Conecta.php");
$link=Conectarse();

if(isset($_POST['nombre'])){$nombre=trim($_POST['nombre']);}
if(isset($_POST['correo'])){$correo=trim($_POST['correo']);}
if(isset($_POST['edad'])){$edad=trim($_POST['edad']);}
if(isset($_POST['clave'])){$password=trim($_POST['clave']);




if(isset($_POST['submit'])){
    if(empty($nombre)){
        echo "<p>El campo nombre esta vacio</p>";}
        if (empty($correo)){
            echo"<p>El campo correo esta vacio</p>";}
            if (empty($edad)){
                echo"<p>El campo edad esta vacio</p>";}
                if (empty($password)){
                    echo"<p>El campo contraseÃ±a esta vacio</p>";}
            
}

if (ctype_alpha($nombre)==TRUE) {
    


$q = mysqli_query($link, "SELECT * FROM usuarios WHERE Correo_us = '$correo'");
//verificamos si el user exite con un condicional
if(mysqli_num_rows($q) == 0){
    
    // mysql_num_rows <- esta funcion me imprime el numero de registro que encontro
    // si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla miembro por lo tanto se puede registrar
    
    if(!empty($nombre && $edad && $correo && $password)){
        
        
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query ($link, "insert into usuarios(Nombre_us,Correo_us,Edad_us,Contrasena_us) values('$nombre','$correo','$edad','$password')");
        
		
			// echo '<script> changePage("iniciosesion.php", "Te has registrado correctamente"); </script>';

			 echo '<script>
             
             swal({
                title: "Te has registrado correctamente",
                text: "",
                icon: "success",
                dangerMode: true,
                button: "Vale",
            }).then(function() {
                window.location = "iniciosesion.php";
            });
              
            
                
      
              
              </script> ';

            

            

//    Header("Location: iniciosesion.php");
		
		}
    
}
else{
    
    
    // echo '<script>  window.alert("El correo ya esta registrado, ingresa otro"); </script>';

    echo '<script> 
    swal({
        title: "El correo ya esta registrado, ingresa otro",
        text: "",
        icon: "error",
        dangerMode: true,
        button: "Vale",
      });
      </script>';

}
}else{
    // echo'<script>  window.alert("El nombre solo pueden ser letras"); </script>';

    echo '<script> 
    swal({
        title: "El nombre solo pueden ser letras",
        text: "",
        icon: "error",
        dangerMode: true,
        button: "Vale",
      });
      </script>';


}
}
?>

	</section>		
	

<!-- Estilos -->
</section>
			


			</div>
		</div>
	  
	  </div>
	  
	  </section>
	  
	  
	  
	  <?php 
include('footer.php');
?>