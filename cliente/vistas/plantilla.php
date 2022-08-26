<?php  
  include('../modelos/conexion.php');?>
<?php

    session_start();
    error_reporting(0);
    $vsesion= $_SESSION['matri'];
    
    if($vsesion==null|| $vsesion='' ){
        header("Location:../../index.php");
        die();
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/encabezado.css">
    <link rel="stylesheet" href="css/barralateral.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/usuarios.css">
    <link rel="stylesheet" href="css/traget-product.css">
    <link rel="stylesheet" href="css/carrito.css">

    <title>Document</title>
</head>

<body>
    <?php
include("modulos/barraLateral.php");
include("modulos/encabezado.php");
include("modulos/menu.php");
include("modulos/usuarios.php");
include("modulos/productos.php");
include("modulos/carrito.php");
include("modulos/pedidos.php");
?>



    <script src="js/main.js"></script>
    <script src="js/secciones.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>