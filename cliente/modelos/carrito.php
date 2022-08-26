<?php
include "conexion.php";
$Matricula=$_REQUEST['Matricula'];
$Categoria=$_REQUEST['Categoria'];
$Producto=$_REQUEST['Producto'];
$Cantidad= "1";
$Precio=$_REQUEST['Precio'];
$Subtotal=$_REQUEST['Precio'];

$carrito="INSERT INTO carrito VALUES ('','$Matricula','$Categoria','$Producto','$Cantidad','$Precio','$Subtotal')";

if (mysqli_query($conn, $carrito)) {
    header("Location: ../vistas/plantilla.php");
    }
else{
    echo" No se agrego al carrito );. ";
    }

?>