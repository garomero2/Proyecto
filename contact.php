<?php 
$tituloPagina = "Contartar";
$pagina = "Contactarse";
include('inc/header.php'); ?><head>
<link rel="stylesheet" href="based/style.css">
</head>

    
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contactos</strong></div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <center><h2 class="h3 mb-5 text-black">Ponerse en contacto</h2></center>
          </div>
          <div class="col-md-12">
          <form method="post">
    	     <center> <p><input type="name" name="name" placeholder="Nombre completo" style='width:400px; '></p></center>
           <center> <p><input type="email" name="email" placeholder="Email" style='width:400px;'></p></center>
           <center> <p><textarea name="mensaje" rows="4" cols="23" placeholder="Escribe el mensaje ..." style='width:400px; height:200px'></textarea></p></center>
    	    <center><h5><input type="submit" name="comentar" style='width:200px; height:60px'></h5></center>
          </form>
		  <br />
          <?php 
          include("comen/comentar.php");
          ?>
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
    <?php include('inc/footer.php'); ?>

