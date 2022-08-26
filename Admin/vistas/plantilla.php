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
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/section.css">



    <title>Administrador</title>
</head>

<body>



    <header>
        <div class="log">
            <img src="img/logo.jpeg" class="log-img" alt="user">
            <h2 class="Coffe_online">coffe_online</h2>
        </div>

    </header>





    <div class="contenedor_men">
        <div class="menu">
            <div class="opcMEN">
                <a href="javascript:desple()" id="mna">Menu</a>
                <section class="Ctr-Bsec">
                    <a href="javascript:desple()" class="agregar">
                        <ion-icon name="add-circle"></ion-icon>
                    </a>
                </section>
            </div>
            <?php
                $datos=mysqli_query($conn,"SELECT * FROM `menu`");
                ?>
            <ul class="lista_men">

                <?php while($Dmen=mysqli_fetch_array($datos)) { ?>
                <li>
                    <a href="javascript:CtablaU()">
                        <span>
                            <ion-icon name="restaurant-outline"></ion-icon>
                        </span>
                        <a href="javascript:taProd()">
                            <i class="fa fa-home"> <?php echo $Dmen['categoria']; ?></i>
                            <?php $idprod->$Dmen['categoria'];?>
                        </a>
                    </a>

                </li>
                <?php } 
                    ?>
            </ul>
        </div>

        <div class="agregar-opc" id="desplegar">
            <div id="cerra">
                <a href="javascript:close()">
                    <ion-icon name="close"></ion-icon>
                </a>

            </div>
            <div class="listadotiempos">
                <ul>
                    <li> <a href="javascript:agregar_seccion()"> Nueva Categoria </a></li><br>

                    <li> <a href="javascript:nuev_produc()"> Agregar producto</a></li><br>
                    <li> <a href="javascript:abr_elim()"> Eliminar Categoria</a></li>
                </ul>
            </div>

        </div>
    </div>



    <--nueva seccion-->
        <div class="Form_men" id="desplegar1">
            <div id="CLOSE">
                <a href="javascript:cerrar_seccion()">
                    <ion-icon name="close"></ion-icon>
                </a>

            </div>

            <form action="../modelos/nuevasec.php" method="post">
                <label for="NuevS">Nueva Categoria:</label>
                <input type="text" name="Nsec" placeholder="Nombre">
                <input type="submit" value="Agregar">
            </form>
        </div>

        <--nuevo producto-->

            <div class="Nuevo_P" id="add_product">
                <div id="cerra">
                    <a href="javascript:cerrar_Nproduc()">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>

                <div class="formProdu">
                    <label for="NuevoP"> Nuevo Producto</label><br>
                    

                    <?php $datos=mysqli_query($conn,"SELECT * FROM `menu`"); ?>

                    <form action="../modelos/agregar-Prod.php " method="post" enctype="multipart/form-data">
                        <label for="nuevo">Nombre:</label>
                        <input type="text" name="nuevoP" placeholder="Nombre">
                        <label for="Tip_seccion">Categoria:</label>
                        <select name="clase" size="1">
                            <?php while($Dmen=mysqli_fetch_array($datos)) { ?>
                            <option value="<?php echo $Dmen['id_men']; ?>"><?php echo $Dmen['categoria']; ?></option>
                            <?php } ?>
                        </select><br>
                        <label for="precio">Precio: $</label>
                        <input type="text" name="costo" placeholder="precio"><br>
                        <label for="img">Imagen</label>
                        <input type="file" name="imagen">
                        <br><input type="submit" name="agregar" value="Agregar">
                    </form>
                </div>
            </div>


<-------------------------eliminar categoria--------------------------->
            <div class="eliminar_secciones" id="elim_secciones">

                <div id="cerra">
                    <a href="javascript:close_elim()">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="contenedor_Elim">
                    <?php
$datos=mysqli_query($conn,"SELECT * FROM `menu`");
?>
                    <h2>Eliminar sección</h2>
                    <form action="../modelos/elimSeccion.php" method="post">
                        <label for="eliminar"> </label><br>
                        <select name="clase" size="1">
                            <option value="#">Seleccione una Categoria</option>
                            <?php while($Dmen=mysqli_fetch_array($datos)) { ?>
                            <option value="<?php echo $Dmen['id_men']; ?>"><?php echo $Dmen['categoria']; ?></option>

                            <?php } ?>
                        </select><br>
                        <input type="submit" name="Eliminar" value="Eliminar">
                    </form>
                </div>
            </div>

            </div>



            <div class="seccion-general">
                <div class="botones">
                    <div class="usuar">
                        <ul>
                            <li> <a href="javascript:tabUser()"> <strong> Usuarios</strong></a> </li>
                            <li> <a href="javascript:Productos()"> <strong> Productos</strong></a> </li>
                            <li><a href="javascript:nuev_ped()">Nuevos Pedidos</a></li>
                            <li><a href="#">Pedidos Listos</a></li>
                        </ul>



                    </div>

                </div>



                <?php
include("modulos/usuarios.php");
include("modulos/productosAdmin.php");
include("modulos/nuev_pedidos.php");
?>






















                <div id="sidebar">




                    <div class="toggle-btn">
                        <a class="Nombre" href="#"><?php echo  $_SESSION["matri"]; ?></a>
                        <span>
                            <ion-icon name="person-outline"></ion-icon>
                        </span>

                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <span>
                                    <ion-icon name="person-outline"></ion-icon>
                                </span>
                                <i class="fa fa-home">Perfil</i>
                            </a>
                        </li>
                        <li>
                            <a href="../modelos/cerrarses.php">
                                <span>
                                    <ion-icon style="color:red;" name="exit-outline"></ion-icon>
                                </span>
                                <i class="fa fa-home" style="color:red;">Salir</i>
                            </a>
                        </li>

                    </ul>
                </div>








                <?php 
    include("modelos/nuevasec.php");
    ?>

                <script src="js/main.js"></script>
                <script src="js/ventanasf.js"></script>
                <script src="js/buscador.js"></script>


                </script>
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>