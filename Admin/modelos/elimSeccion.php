<?php 
include('../modelos/conexion.php');
$secc_elm=$_POST["clase"];
$secc_elmp=$_POST["clase"];


$query =mysqli_query($conn ,"SELECT * FROM menu WHERE categoria = '$secc_elm'");
$nr=mysqli_num_rows($query);

if( $nr== 1){
    header("Location:../vistas/plantilla.php");
   
}
else{
$sql= "DELETE FROM menu WHERE `menu`.`id_men` = '$secc_elm'";
if (mysqli_query($conn, $sql)) {
   
    if (mysqli_query($conn, $sql)) {     
        header("Location:../vistas/plantilla.php");
    }
}

}
?>