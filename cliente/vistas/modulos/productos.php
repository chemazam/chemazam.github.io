
<div class="contenedor-productos" id="producto">

    <?php

$conexion=mysqli_connect("localhost","root","","cafeteria");               
$SQL="SELECT productos.nombre, productos.precio, menu.categoria FROM productos
LEFT JOIN menu ON productos.id_categoria = menu.id_men $where";
$dato = mysqli_query($conexion, $SQL);


    while($fila=mysqli_fetch_array($dato)){
    
?>
    <div class="card">
        <img src="img/logo.jpeg" class="card-img-top" alt="...">
        <div class="card-body">

            <h3 class="card-title"></h3>

            <p class="card-text"><?php echo $fila['categoria']; ?></p>
            <i href="#"><?php echo $fila['nombre']; ?></i><br>
            <i href="#">Precio: $<?php echo $fila['precio']; ?></i><br>
            <a style="color:green" href="../modelos/carrito.php?Matricula=<?php echo $_SESSION['matri'];?>
            &Categoria=<?php echo $fila['categoria']; ?>&Producto=<?php echo $fila['nombre']; ?>&Precio=
            <?php echo $fila['precio']; ?>" class="btn btn-primary">Agregar a carrito</a>
        </div>
    </div>
<?php
}
?>
</div>