


<?php 
include('cabecera.php');
?>

<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

					<div class="mt-lg-5 mb-lg-0 mb-4   mx-auto">


<!-- Estilos -->



<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="tienda.php">Tienda</a></li>
    <li class="breadcrumb-item"><a href="carrito.php">Carrito</a></li>
    <li class="breadcrumb-item active" aria-current="page">Datos de envio</li>
  </ol>
</nav>


<a href="carrito.php" data-aos="fade-up" data-aos-delay="400" class="fa fa-chevron-circle-left fa-2x"  aria-hidden="true"></a></br>


</br><form action="datos.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form" style="width:800px;">

<?php 
include ("Conecta.php");
$link=Conectarse();


  $email=$_SESSION['user'];

  $result=mysqli_query ($link, "SELECT ID_us FROM usuarios WHERE Correo_us = '$email'");

  
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $id_us = $row['ID_us'];
     
  
}
$price=$_GET['precio'];
?>


      <!-- input para el id usuario -->
        <input style="border-radius: 20px;" id="total" name="total" type="hidden" value="<?php echo $price;?>">      


        <input style="border-radius: 20px;" id="id" name="id" type="hidden" value="<?php echo $id_us;?>">


        <label for="full_name_id" class="control-label">Nombre completo</label>
        <input style="border-radius: 20px;" type="text" class="form-control" id="full_name" name="full_name" placeholder="Nombre" required>
  

        <label for="street1_id" class="control-label">Linea 1 de la dirección</label>
        <input style="border-radius: 20px;" type="text" class="form-control" id="street1" name="street1" placeholder="Dirección" required>
                   
   
        <label for="street2_id" class="control-label">Linea 2 de la dirección</label>
        <input style="border-radius: 20px;" type="text" class="form-control" id="street2" name="street2" placeholder="Bloque, Escalera, piso, etc.">
   

        <label for="city_id" class="control-label">Ciudad</label>
        <input style="border-radius: 20px;" type="text" class="form-control" id="city" name="city" placeholder="Ciudad" required>
                            

        <label for="state_id" class="control-label">Provincia</label>

        <select class="form-control" id="state" name="state" required>
        <option value="">Elige tu provincia</option>
        <option value="Álava/Araba">Álava/Araba</option>
        <option value="Albacete">Albacete</option>
        <option value="Alicante">Alicante</option>
        <option value="Almería">Almería</option>
        <option value="Asturias">Asturias</option>
        <option value="Ávila">Ávila</option>
        <option value="Badajoz">Badajoz</option>
        <option value="Baleares">Baleares</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Burgos">Burgos</option>
        <option value="Cáceres">Cáceres</option>
        <option value="Cádiz">Cádiz</option>
        <option value="Cantabria">Cantabria</option>
        <option value="Castellón">Castellón</option>
        <option value="Ceuta">Ceuta</option>
        <option value="Ciudad Real">Ciudad Real</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Cuenca">Cuenca</option>
        <option value="Gerona/Girona">Gerona/Girona</option>
        <option value="Granada">Granada</option>
        <option value="Guadalajara">Guadalajara</option>
        <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
        <option value="Huelva">Huelva</option>
        <option value="Huesca">Huesca</option>
        <option value="Jaén">Jaén</option>
        <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Las Palmas">Las Palmas</option>
        <option value="León">León</option>
        <option value="Lérida/Lleida">Lérida/Lleida</option>
        <option value="Lugo">Lugo</option>
        <option value="Madrid">Madrid</option>
        <option value="Málaga">Málaga</option>
        <option value="Melilla">Melilla</option>
        <option value="Murcia">Murcia</option>
        <option value="Navarra">Navarra</option>
        <option value="Orense/Ourense">Orense/Ourense</option>
        <option value="Palencia">Palencia</option>
        <option value="Pontevedra">Pontevedra</option>
        <option value="Salamanca">Salamanca</option>
        <option value="Segovia">Segovia</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Soria">Soria</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Tenerife">Tenerife</option>
        <option value="Teruel">Teruel</option>
        <option value="Toledo">Toledo</option>
        <option value="Zaragoza">Zaragoza</option>
        <option value="Valencia">Valencia</option>
        <option value="Valladolid">Valladolid</option>
        <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
        <option value="Zamora">Zamora</option>
  </select>
    
    
        <label for="zip_id" class="control-label">Codigo postal</label>
        <input style="border-radius: 20px;" type="text" class="form-control" id="zip" name="zip" placeholder="#####" required>


  


        <button style="border-radius: 30px;" type="submit" name="submit3" class="btn btn-danger form-control">Tramitar pedido</button>
      

      
    
</form>




<!-- Estilos -->
			


      </div>
  </div>

</div>

</section>



<!-- FOOTER -->
<?php 
include('footer.php');
?>