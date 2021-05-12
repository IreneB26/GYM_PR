<?php 
include('cabecera.php');
?>
<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mx-auto">

<!-- Estilos -->


<?php

session_start();
include ("Conecta.php");
$link=Conectarse();
if(isset($_SESSION['user'])){
    $email=$_SESSION['user'];


$autor= mysqli_query ($link, "SELECT Nombre_us FROM  usuarios WHERE Correo_us = '$email'");


while($row = mysqli_fetch_array($autor)){
    $autor2 = $row['Nombre_us'];
    }
    


if(isset($_GET["respuestas"])){
    $respuestas = $_GET['respuestas'];
}else{
        $respuestas = 0;
	}if(isset($_GET["identificador"])){
		$identificador = $_GET['identificador'];
		}else{
                 $identificador = 0;}
				
				
                 ?> 

<table data-aos="fade-up" data-aos-delay="200">
<form name="form" action="insertar.php" method="post" class="contact-form webform" >

	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
    <tr>
		<td>Autor</td>
		<td><input  class="form-control" style="background-color:#f9f9f9; border:0;" type="text" name="autor" readonly value="<?php if(isset($autor2)){echo $autor2;}?>"></td>
    </tr>
    <tr>
      <td>Titulo</td>
      <td><input style="border-radius: 20px;" class="form-control" type="text" name="titulo"></td>
    </tr>
    <tr>
      <td>Mensaje</td>
      <td><textarea style="border-radius: 20px;" class="form-control" name="mensaje" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
      <td><input style="border-radius: 30px;" class="btn btn-danger form-control" type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>
	</section>

	<?php

}
?>

			
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