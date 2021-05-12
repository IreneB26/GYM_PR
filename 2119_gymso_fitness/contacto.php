<?php 
include('cabecera.php');
?>

<!-- CONTACT -->
<section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Pregunta lo que necesites</h2>

                        <form action="contacto.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="300" role="form">
                            <input style="border-radius: 20px;" type="text" class="form-control" name="nombre" placeholder="Nombre" required>

                            <input style="border-radius: 20px;" type="email" class="form-control" name="email" placeholder="Email" required>

                            <textarea style="border-radius: 20px;" class="form-control" rows="5" name="mensaje" placeholder="Mensaje" required></textarea>

                            <button style="border-radius: 30px;" type="submit" class="btn btn-danger form-control"  id="submit" name="submit">Enviar mensaje</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Aquí puedes encontrarnos</h2>

                        <p data-aos="fade-up" data-aos-delay="300"><i class="fa fa-map-marker mr-1"></i> Av. de Burjassot, 31, 46009 València, Valencia</p>

                        <p data-aos="fade-up" data-aos-delay="300"><a data-aos="fade-up" data-aos-delay="300" href="tel:1-408-555-5555">673 000 000</a></p> <p data-aos="fade-up" data-aos-delay="300"><a href="sms:1-408-555-1212"> Mandenos un SMS</a></p>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="300">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.316024282164!2d-0.3871991845659295!3d39.484778079484315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f580d513a0d%3A0x826fd5a85a40dc63!2sDeportivo%20Okinawa%20SL!5e0!3m2!1ses!2ses!4v1617879066171!5m2!1ses!2ses" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>

<!-- alert envio de datos -->

<!-- <script>
     function myFunction() {
  alert("Se han enviado los datos correctamente");
}
</script> -->



<?php
if(isset($_POST["nombre"])){$nombre=$_POST['nombre'];}
if(isset($_POST["email"])){$correo=$_POST['email'];}
if(isset($_POST["mensaje"])){$mensaje=$_POST['mensaje'];}



if(isset($_POST['submit'])){
    if(empty($nombre)){
        echo "<p>El campo nombre esta vacio</p>";}
        if (empty($correo)){
            echo"<p>El campo correo esta vacio</p>";}
            if (empty($mensaje)){
                echo"<p>El campo mensaje esta vacio</p>";} 
                
                    
               
}
                    



if(isset($nombre)){
    $nombre=validar_nombre($nombre);
}if(isset($mensaje)){
    $mensaje=validar_mensaje($mensaje);
    
}





function validar_nombre($nombre) {
    
    if (ctype_alpha($nombre)==TRUE) {
        
    }
}


function validar_mensaje($mensaje) {
 return strip_tags($mensaje);
}

    

 //-------------
if(isset($nombre)){
}if(isset($mensaje)){
}if(isset($correo)){
   

  
    $mensaje .="Contacto desde la web:\n";
    $mensaje .="---------------------------------------------------------\n";
    $mensaje .="\n";
    $mensaje .="Nombre: $_POST[nombre]\n";
    $mensaje .="\n";
    $mensaje .="email: $_POST[email]\n";
    $mensaje .="\n";
    $mensaje .="Mensaje: $_POST[mensaje]\n";
    //$desde = 'From: Desde la web <info@ceramica.com>'."\r\n";
    
    //creando las variables para el email//
    //$to = 'webmaster@ceramica.com';
   // $subject = 'Mensaje desde la web';
    //Si no hay errores, enviamos el email y damos un mensaje de envío al usuario//
    //mail($to, $subject,$mensaje,$desde);
    //echo "Su mensaje se ha enviado correctamente";
    
   // echo "<script>alert('Datos enviados correctamente');window.location= 'contactar.php'
 //</script>";

// echo"
// <script>
//     myFunction();

// </script>" ;

echo'
<script>  swal({
    title: "Se han enviado los datos correctamente",
    text: "",
    icon: "success",
    dangerMode: true,
    button: "Vale",
  });
</script>';
}
 
?>



    <!-- echo"<p class='af'>se enviaron los datos correctamente</p>";
    
    
//     exit(); 
   
 
   
// } -->




<?php 
include('footer.php');
?>