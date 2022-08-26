<?php 
    include('../modelos/conexion.php');
    $NomS=$_POST["Nsec"];
    
    $sql="INSERT INTO `menu` (`id_men`, `categoria`) VALUES (NULL, '$NomS')";
    if (mysqli_query($conn, $sql)) {
                   header("Location:../vistas/plantilla.php");
      }
  
    
 ?>