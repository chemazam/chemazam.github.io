<?php 

    require_once('conexion.php');
    $nombre_producto=$_POST["nuevoP"];
$secc_perten=$_POST["clase"];
$costo_produc=$_POST["costo"];
$revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$imgContenido = addslashes(file_get_contents($image));


$query =mysqli_query($conn ,"SELECT * FROM productos WHERE nombre ='$nombre_producto'");
$nr=mysqli_num_rows($query);

if($nr == 1){
    header("Location:../vistas/plantilla.php");
}
else{

    $sql="INSERT INTO productos(`nombre`, `id_categoria`, `precio`, `imagen`) VALUES ('$nombre_producto','$secc_perten','$costo_produc','$imgContenido')";
    if (mysqli_query($conn, $sql)) {

        header("Location:../vistas/plantilla.php");
  }
}



?>