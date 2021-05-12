<?php 
include('cabecera.php');
?>

    <p class="user"><?php 
session_start();
if(isset($_SESSION['user'])){
echo "Usuario: ".$_SESSION['user'];
echo"<br><a href='logout.php'>Cerrar Sesión</a>";
}
?>
</p>

     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">¡Nueva forma de construir un estilo de vida saludable!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">MEJORA TU CUERPO EN SOCIAL SPORT</h1>

                                    

                                    <a style="border-radius: 30px;" href="#feature" class="btn btn-outline-danger btn-lg" data-aos="fade-up" data-aos-delay="700">Empieza</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">¿Nuevo en Social Sport?</h2>

                    <p class="mb-4 text-white" data-aos="fade-up">Aquí puedes tanto interactuar con otros usuarios a través de la plataforma, como comprar en nuestra tienda o ver nuestros horarios</p>

                    <a style="border-radius: 30px;" href="iniciosesion.php" class="btn btn-danger btn-lg" data-aos="fade-up" data-aos-delay="300">Inicia sesión e la web</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horarios</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingos : Cerrado</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábados</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>

    



     <?php 
        include('footer.php');
    ?>