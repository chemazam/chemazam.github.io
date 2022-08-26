<?php 

    require_once('conexion.php');
    $mat=$_POST["matri"];
    $Nombrec=$_POST["nombre"];
    $Preseg=$_POST["opciP"];
    $reseg=$_POST["pse"];
    $pas=$_POST["pass"]; 
    $cpas=$_POST["passw"];

    $query =mysqli_query($conn ,"SELECT * FROM usuarios WHERE ID_matricula = '".$mat."'");
    $nr=mysqli_num_rows($query);

    if($nr==1) {  
        echo "la matricula ya existe";
        }
        if($nr==0) { 
            if($pas == $cpas) { 
                $sql="INSERT INTO usuarios(`ID_matricula`, `nombre`, `pregunta`, `respuesta`, `password`,`ID_tipo`) VALUES ('$mat', '$Nombrec','$Preseg','$reseg','$pas','2')";
                if (mysqli_query($conn, $sql)) {
                    header("Location:../index.php");
              }
            } else { 
                echo "Las claves no son iguales, intente nuevamente."; 
                header("Location:../Registro.php");
                mysqli_close($conn);
            } 
        } else {
           
            echo "Este usuario ya ha sido registrado anteriormente."; 
            header("Location:../Registro.php");
            mysqli_close($conn);
        } 
    
    
        ?>