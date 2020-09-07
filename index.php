<?php
include 'global/config.php';
include 'global/conexion.php';
?>
<?php 
$tituloPagina = "Inicio Farmacos JMG";
$pagina = "inicio";
include('inc/header.php'); 
?>  

    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg.jpg');height: 100px; ">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">FÁRMACOS JMG</strong> Horarios</h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lunes a viernes 9 a.m - 6 pm</p>
                    <p>Sábados 10 a.m - 2 pm </p>
                  </div>
                </div>
                
                <p><a href="shop.php" class="btn btn-primary px-5 py-3">Comprar ahora</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Nueva Medicina <strong class="text-primary">Todos los días</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>En fármacos JMG te ofrecemos productos de alta calidad con un stock actualizado.</p>
                  </div>
                </div>
                <p><a href="shop.php" class="btn btn-primary px-5 py-3">Comprar ahora</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a >Entrega gratis</a></h3>
              <p>Le hacemos llegar sus productos sin recargo alguno. </p>
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a >Consulte a su farmacéutico</a></h3>
              <p> Si necesita más información detallada consulte con los profesionales. </p>
           
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature"> <span class="wrap-icon flaticon-test-tubes"></span>
                <h3><a >Medicamentos garantizados</a></h3>
              <p> Contamos con distribuidores de alta calidad y de reconocimiento público.</p>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <p><h2> FÁRMACOS JMG<strong class="text-primary style1"> Productos</strong></h2></p>

                  <img src="images/farmaceuticos.jpg" width="500" height="250">
                  <p><h3 class="block-38-heading h4">Mira los todos los productos que tenemos para ti</h3></p>
                  <p><a href="shop.php" class="btn btn-primary px-2 py-1">Ver tienda</a></p>
            
          </div>          
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="title-section">
              <h2>Clientes <strong class="text-primary">Satisfechos</strong></h2>
            </div>
            <div class="block-3 products-wrap">
            <div class="owl-single no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                  <p>Excelente servicio me gustaron mucho sus productos.</p>
                </blockquote>

                <p class="author">&mdash; Ana Hérnandez</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                  <p>Tiene una muy buena variedad de productos y un servicio de calidad.</p>
                </blockquote>
              
                <p class="author">&mdash; Alejandra Sánchez</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                  <p> Lo que más me agrada es que hacen entregas inmediatas. </p>
                </blockquote>
              
                <p class="author">&mdash; Joel Farias</p>
              </div>
    
        
            </div>
          </div>
          </div>
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">¿Quienés somos? <strong class="text-primary"></strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p style="text-align: justify;"> ¿Cómo comenzamos? Desde sus comienzos en el año 2019, FÁRMACOS JMG es conocido por su compromiso auténtico con la satisfacción del cliente. </p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p style="text-align: justify;">Este estándar de excelencia nos ha permitido crecer hasta llegar a donde estamos ahora.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p style="text-align: justify;">Para más información sobre nuestros productos y servicios, contáctanos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('inc/footer.php'); ?>
