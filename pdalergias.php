<?php
include 'global/config.php';
include 'global/conexion.php';
include 'car.php';
?>
<?php 
$tituloPagina = "Alergias";
$pagina = "alergias";
include('inc/header.php'); 
?>  

<div class="bg-light py-3">
   <div class="container">
     <div class="row">
 
       <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ALERGÍAS Y ANTIMAREOS</strong></div>
     </div>
   </div>
</div>

<div align="right">
	<form method="get" class="form_search" >
		<input type="text" name="documento" id="busqueda" placeholder="Buscar ..." style='width:400px; height:35px'>
		<input type="submit" name="buscar" value="Buscar" class="btn btn-outline-success px-1 py-1">
  </form>
</div>
  
  <?php 
	if($_GET){
    require('busqueda/config.php');
        $con = Conectar();
        $id = $_GET['documento'];
        $sql = 'SELECT ID, Precio, Descripcion, Imagen
        FROM tblalergias WHERE Nombre = :doc';
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(array(':doc'=>$id));
        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

        if(count($rows)){
            foreach($rows AS $row){
				?>
            <div class="panel panel-primary">
            <div class="panel-heading">Información del producto: <?php print($id)?></div>
            <div class="panel-body">
            <?php print("ID producto: ".$row->ID."<br>")?>
            <?php print("Precio: ".$row->Precio."<br>")?>
			<?php print("Descripción: ".$row->Descripcion."<br>")?>
			<?php print("Ver producto según el ID: ".$row->ID."<br>")?>
            </div>
			</div>
        <?php
            }
        }else{
            echo "EL producto no existe en la base de datos";
        }
    }

  ?>

 <div class="site-section bg-light">
   <div class="container">
 <br>
 <?php if($mensaje!="") { ?>
 <div class="alert alert-success">
 <?php echo $mensaje; ?>
 
 <a href="mostrarCarrito.php" class="badge  badge-success">ver carrito </a>
 </div>
 <?php }?>

 <div class="row">
 
  <?php
   $sentencia= $pdo -> prepare("SELECT * FROM tblalergias");
   $sentencia->execute();
   $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   //print_r($listaProductos);

  ?>
  <?php foreach($listaProductos as $producto){ ?>
  
    <div class="col-sm-6 col-lg-3 text-center item mb-4 item-v2">
    <p><h5  class="text-primary style1"><?php echo  "ID: ".$producto['ID']; ?></p>

          <img 
    title="<?php echo $producto['Descripcion'];?>"
    src=<?php echo  $producto['Imagen']; ?>
    data-toggle="popover"
    data-trigger="hover"
    data-content="<?php echo $producto['Descripcion'];?>" 
     height="150px"
    >
         <p><h5  class="text-primary style1"><?php echo  $producto['Nombre']; ?></p>
    <p class="price">$<?php echo  $producto['Precio']; ?></p>
    
    
     <form action ="" method="post">
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt( $producto['ID'],COD,KEY); ?>">
     <input type="hidden" name="nombre" id="nombre" value="<?php echo  openssl_encrypt( $producto['Nombre'],COD,KEY); ?>">
     <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $producto['Precio'],COD,KEY); ?>">
     <p>Cantidad: <input type="number" name="cantidad" id="cantidad" required='required'  value="1" min="1" max="20" style='width:50px; height:25px'></p>   
    <button class="btn btn-outline-success px-1 py-1" name="btnAccion"  value="Agregar" type="submit"> Agregar al carrito</button>
    </form>
    </div>
  
 <?php }?>
      
  <script>
  
  $(function () {
        $('[data-toggle="popover"]').popover()
      })
  </script>

         </div>
       </div>
     </div>
   </div>
 </div>
 <?php include('inc/footer.php'); ?>
