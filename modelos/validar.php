<?php 
$mat=$_POST["matri"];
$pas=$_POST["pass"];
session_start();
$_SESSION["matri"]=$mat;
include('conexion.php');

$query ="SELECT * FROM usuarios WHERE ID_matricula = '$mat' and password = '$pas'";
$res=mysqli_query($conn,$query);
$nr=mysqli_fetch_array($res);

if($nr['ID_tipo']==1){
    header("Location:../Admin/vistas/plantilla.php");
}else
if($nr['ID_tipo']==2){
    header("Location:../cliente/vistas/plantilla.php");
}else{
    header("Location:../index.php");
    echo "Usuario o contraseña erroneos:";
   
}
mysqli_free_result($res);
mysqli_close($conn);
?>   