<?php 
include('cabecera.php');
?>
<!-- Foro -->

<?php 
session_start();

if(isset($_SESSION['user'])){

?>

<section class="about section" id="about">
               <div class="container">
                    <!-- <div class="row"> -->

                    <div class="mt-lg-5 mb-lg-0 mb-4   mx-auto">
<!-- Estilos -->
<style>table[class="tabla"]{
	
	color: red;
	/* background-color: black;  */
  
  
	
		
	
}</style>

<?php
include("Conecta.php");
$link=Conectarse();

if(isset($_GET["id"])){
    $id = $_GET['id'];
    
    $result=mysqli_query ($link, "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC");
    
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $id = $row['ID'];
        $titulo = $row['titulo'];
        $autor = $row['autor'];
        $mensaje = $row['mensaje'];
        $fecha = $row['fecha'];
        $respuestas = $row['respuestas'];
        ?>

        <div class="container" data-aos="fade-up" data-aos-delay="200">
        

         <div style="width:100%;" class="card">
         <!-- <div class="card-header"><?php //echo "<strong>$autor</strong>"; echo "<h3 style='color:red;'>$titulo</h3>";?></div> -->
    <div class="card-body"><?php echo "<strong>$autor</strong>"; echo "<h3 style='color:red;'>$titulo</h3><hr>"; echo "<p> $mensaje</p>";?></div>
    <div class="card-footer"><?php echo "<a href='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder <i class='fa fa-reply' aria-hidden='true'></i></a>"; ?></div>
    </div>


        <?php 





// echo "<tr><td>titulo: $titulo</tr></td>";
// echo "<table>";
// echo "<tr><td>autor: $autor</td></tr>";
// echo "<tr><td>mensaje: $mensaje</td></tr>";
// echo "</table>";
// echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br/>";

    }
}?>
<?php if(isset($_GET["id"])){
    $id = $_GET['id'];

    $result2=mysqli_query ($link, "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC");?>
    <p class="respuestas">
    <?php 
     echo "<br />respuestas:<br /><hr><br/>";?></p>
    <?php 
    while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
        $id = $row['ID'];
        $titulo = $row['titulo'];
        $autor = $row['autor'];
        $mensaje = $row['mensaje'];
        $fecha = $row['fecha'];
        $respuestas = $row['respuestas'];
        ?>
        

        <div class="card">
         <div class="card-header"><?php echo "<strong>$autor</strong>";?></div>
    <div class="card-body"><?php echo "<p> $mensaje</p>";?></div>
    </div><br>





        <?php 
        // echo "<tr><td>titulo: $titulo</tr></td>";
        // echo "<table>";
        // echo "<tr><td>autor: $autor</td></tr>";
        // echo "<tr><td>mensaje: $mensaje</td></tr>";
        // echo "</table></br><hr>";
    }
}?>
</div>
<?php 
}else{
    header("location:iniciosesion.php");
}
    ?>

    <!-- Estilos-->

    </section>
			


      </div>
  </div>

<!-- </div> -->

</section>
   
<!-- FOOTER -->
<?php 
include('footer.php');
?>