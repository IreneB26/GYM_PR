<?php 
include('cabecera.php');
?>

<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

					<div class="mt-lg-5 mb-lg-0 mb-4   mx-auto">


<!-- Estilos -->

<h1 data-aos="fade-up" data-aos-delay="200" style="top:20px;">Interactue con otros usuarios</h1><br>

<?php
if(!isset($_SESSION['user'])){
        	echo'<p class="ind" style="text-align:center;" data-aos="fade-up" data-aos-delay="300"> Para poder interactuar, necesitará iniciar sesión en la web</p></br>';
    }

?>


<div class="table" data-aos="fade-up" data-aos-delay="400">
<table class="table table-hover" style="margin: 0 auto; background-color:#f9f9f9;">
<thead>
	<tr>
		<td width="20px"></td>
		<td width="200px">Título</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
	</thead>
	
	
	
<?php 

	include("Conecta.php");
	$link=Conectarse();
	
	$result=mysqli_query($link, "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC");
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id'>ver</a> </td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("d-m-y")."</td>"; //fecha modifica --------------------------------
			echo "<td> $respuestas <i class='fa fa-comments-o' aria-hidden='true'></i></td>";
			
			
		echo "</tr>";
	}

	
?>
</table>
</div>

<div data-aos="fade-up" data-aos-delay="400">

<?php 
    
    if(isset($_SESSION['user'])){
      /*  echo"<a class='btn-sm btn-danger' style='border-radius: 30px;'  href='formulario.php'> nuevo tema </a>";*/
        	echo'<a style="border-radius: 30px;" href="formulario.php" class="btn btn-danger" >Nuevo tema</a>';
    }


?>
</div>

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