<?php 

session_start();


if(!isset($_SESSION["micuenta"])){


	header("location:login.html");
	die();
}

print_r($_SESSION);

include "../function.php";
include"../header.php"; 

$productos = obtenerProductos("SELECT * FROM productos");

//print_r($productos);

?>
<div class="container">

<cite> hola github<?php echo $_SESSION["micuenta"]; ?>
	
  <a href="./admin/sesion.php" style="float:right;"> [X] cerrar sesion</a>

</cite>

<h2> Listado de productos </h2> 
<a href="./admin/agregar.php" style="float: right;">


<button> + Nuevo producto </button>



</a>


<div class="table-responsive">

<table class="table table-striped">
	
    <tr>
    	
    	<th>#ID</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>

    </tr>


   <?php foreach ($productos as $producto) {?>

    <tr>

        <td class="text-center"> <?php echo $producto["IDproducto"] ?> </td>
        <td class="text-center"><img src="images/productos/sin-foto.jpg" alt="" width="100"></td>
        <td class="text-center"> <?php echo $producto["Nombre"] ?> </td>
        <td class="text-center"> <?php echo $producto["Precio"] ?> </td>
        <td class="text-center"> <?php echo $producto["Stock"] ?> </td>

       
        	
        <td class="text-center">
        	<a href="Admin/Actualizar.php?ID=<?php echo $producto["IDproducto"] ?>">Actualizar</a>
        	<a href="#">Eliminar</a>

        </td>
    
    </tr>

  <?php } ?>

</table>

</div>

</div>




<?php include"../footer.php"; ?>

