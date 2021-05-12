<?php 
include('cabecera.php');
?>
<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">

<div style="text-align: center;">
<p>
<?php 
session_start();
if(isset($_SESSION['user'])){
echo "<p>Ya existe una sesión iniciada</p><br>";
echo "Usuario: ".$_SESSION['user'];
echo"<br><a href='logout.php'>Cerrar Sesión</a>";
}else{
?></p>     
</div>
               
      
      <div class="row">
          

<div  data-aos="fade-up" data-aos-delay="400" style="width:50%;  background-image: url('images/team/team-pat.jpg');"class="column">
<!-- <img style="width:50%; heigth:100%;" class="d-block w-100" src="images/team/team-image01.jpg" alt="Card image cap"> -->
  <div data-aos="fade-up" data-aos-delay="400" class="card">
  </div>
</div>
<div data-aos="fade-up" data-aos-delay="400" style="width:50%;"class="column">
  <div style="width:100%; heigth:100%;   padding: 30px;" class="card">
  <h1 data-aos="fade-up" data-aos-delay="400" class="card-title">Inicie sesión en<span style="color:#dd3444;"> SOCIAL SPORT</span></h1>
  <FORM ACTION="datos_in.php"  METHOD="POST" class="contact-form webform" data-aos="fade-up" data-aos-delay="400">

Email:<br>
<INPUT style="border-radius: 20px;" class="form-control" TYPE="email"  NAME="email" required>


Contraseña:<br>
<INPUT style="border-radius: 20px;" class="form-control" TYPE="password" NAME="clave" required><br>

<p class="message">¿No estás registrado? <a href="crear_us.php">Crea una cuenta</a></p>

<INPUT class="btn btn-danger form-control" TYPE="submit" name="submit" VALUE="Iniciar" style="width:150px;height:50px;border-radius: 30px; ">
</FORM>
</div>
</div>
<?php } ?>


                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0   mx-auto">


<!-- Estilos -->



<!-- loging-->





<!-- Estilos -->
</section>
			


      </div>
  </div>

</div>

</section>



<!-- FOOTER -->
<?php 
include('footer.php');
?>