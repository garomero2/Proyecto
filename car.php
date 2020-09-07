<?php

if(!isset($_SESSION)){
	session_start();
}

$mensaje="";

if(isset($_POST['btnAccion'])){

switch($_POST['btnAccion']){
  case 'Agregar':
	 
	if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
	     $ID= openssl_decrypt($_POST['id'],COD,KEY);
		 $mensaje.="OK ID CORRECTO.. ".$ID."<br/>";
		 
	 }else{
	     $mensaje.="ups.. ID INCORRECTO.. ".$ID."<br/>" ;
	   
	 }
	 
	 if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
	     $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
		  $mensaje.="ok nombre ".$NOMBRE."<br/>";
	     }else{ $mensaje.="algo pasa con el nombre"."<br/>" ;break; }
	 
	      if(is_numeric(($_POST['cantidad']))){
	        $CANTIDAD=($_POST['cantidad']);
		     $mensaje.="ok cantidad ".$CANTIDAD."<br/>";
		  }else{ $mensaje.="ups.. algo pasa con la cantidad"."<br/>" ; break;}
		 
		 
	     if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
	       $PRECIO= openssl_decrypt($_POST['precio'],COD,KEY);
		   $mensaje.="ok precio ".$PRECIO."<br/>";
	     }else{  $mensaje.="ups.. algo pasa con el precio "."<br/>" ; break; }
  
     if(!isset($_SESSION['CARRITO'])){
        $producto=array('ID'=> $ID,'NOMBRE'=> $NOMBRE,'CANTIDAD'=> $CANTIDAD,'PRECIO'=> $PRECIO );
     
	     $_SESSION['CARRITO'][0]=$producto;
		 $mensaje= "producto agregado al carrito";
  
  
        }else{ 
		
		    $idproductos=array_column($_SESSION['CARRITO'],"NOMBRE");
			   
		
		  if(in_array($NOMBRE, $idproductos)){
		   echo "<script>alert('El producto ya ha sido seleccionado..');</script>";
		   $mensaje="";
		  }else{
		  
               $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
	             'ID'=>$ID,
	             'NOMBRE'=>$NOMBRE,
				 'CANTIDAD'=>$CANTIDAD,		 
	             'PRECIO'=>$PRECIO,
                   );
     
	  $_SESSION['CARRITO'][$NumeroProductos]=$producto;
	  $mensaje= "producto agregado al carrito";
    }
       //$mensaje= print_r($_SESSION,true);
	}  
 
 break;
   case 'Eliminar':
       if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
	     $NOMBRE= openssl_decrypt($_POST['nombre'],COD,KEY);
		 foreach($_SESSION['CARRITO'] as $indice=>$producto){
		    if($producto['NOMBRE']==$NOMBRE){
			   unset($_SESSION['CARRITO'][$indice]);
			    echo "<script>alert('Elemento borrado');</script>";
			
			
			}
		 
		 }
		 
	 }
}

}
?>