<?php
include 'global/config.php';
include 'global/conexion.php';
include 'car.php';
?>
<?php 
$tituloPagina = "Inicio Farmacos JMG";
$pagina = "inicio";
include('inc/header.php'); 
?>  



<?php
  if($_POST){
       $total=0;
       $SID=session_id();
       $Correo=$_POST['email'];
     foreach($_SESSION['CARRITO'] as $indice=>$producto) {
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
     }
      $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
                             (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
       VALUES (NULL,:ClaveTransaccion, '', NOW(),:Correo, :Total, 'pendiente');");
      
      $sentencia->bindParam(":ClaveTransaccion",$SID); 
      $sentencia->bindParam(":Correo",$Correo); 
      $sentencia->bindParam(":Total", $total);
      $sentencia->execute();
      $idVenta=$pdo->lastInsertId();

      foreach($_SESSION['CARRITO'] as $indice=>$producto) {

        $sentencia=$pdo->prepare("INSERT INTO 
        `tbldetalleventas` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`)
        
         VALUES (NULL,:IDVENTA,:IDPRODUCTO,:PRECIOUNITARIO,:CANTIDAD);");
          $sentencia->bindParam(":IDVENTA",$idVenta); 
          $sentencia->bindParam(":IDPRODUCTO",$producto['ID']); 
          $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
          $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']); 
          $sentencia->execute();
      }
       // echo "<h3>".$total."</h3>";
    }

?>


<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final !</h1>
    <p class="lead">Estas apunto de pagar con paypal la cantidad de:
    <h4><b>$<?php echo number_format($total,2); ?></h4>
    </p>
    <p>Los productos seran enviados una vez que se procese el pago <br/>
    <strong>(para aclaraciones : cervantesjessica949@gmail.com)</strong>
    </p>
    
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40 
            }

        }).render('#paypal-button-container');
    </script>
</body>
  
    
  </div>



<footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Sobre  <strong class="text-primary">FARMACOS JMG</strong></h3>
              <p  style="text-align: justify;">Somos un grupo de personas que trabajan con profesionales en farmacia para una correcta distribucci�n de los productos.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Siguenos en</h3>
            <ul class="list-unstyled">
              <li> <img src ="images/1.png" width="50" height="50"> <a href="https://www.facebook.com/?stype=lo&jlou=AfdRSM8YpOKbo-mc8cj9tvYQQJiFU25pPfb_FpxXq3LWxoN_kNLNUhVwMdPJfBQIZtk_TaEtGxXJNgx3y0fclsdgoUeReOe19ibGUC0dbb3JTw&smuh=5739&lh=Ac_9DFwel-FrxVlU"> farmacosjmg</a></li>
              <li> <img src ="images/2.png" width="50" height="50"> <a href="https://www.instagram.com/?hl=es-la"> @farmacosjmg</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4"></h3>
              <ul class="list-unstyled">
                <li class="address">Av. Bruselas, Santo Domingo, Ecuador</li>
                <li class="phone"><a href="tel:// 097842351">+2 392 3929 210</a></li>
                <li class="email">farmacosjmg@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>



          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados
           
             
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>




</body>
</html>