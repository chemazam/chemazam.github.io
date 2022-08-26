<div class="contenedor-carrito" id="carrito">
    <h2 style="color:black;" class="lista-productos">Carrito:</h2>
    <table class="Carrito">
        <caption>Lista de compras</caption>
        <thead>
            <tr>
                <th>producto</th>
                <th>cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody style="color:black">
        <?php

$conexion2=mysqli_connect("localhost","root","","cafeteria"); 
$Matricula= "12345678";             
$SQLC="SELECT * FROM carrito WHERE Matricula = '$Matricula'";
$datos = mysqli_query($conexion2, $SQLC);
$Total=0;
while($filac=mysqli_fetch_array($datos)){
    $Total = $Total+$filac['Subtotal'];

?>
        <tr>

            <td><?php echo $filac['Categoria']; ?>  <?php echo $filac['Producto']; ?></td>
            <td><?php echo $filac['Cantidad']; ?></td>
            <td>$<?php echo $filac['Precio_Unitario']; ?></td>
            <td>$<?php echo $filac['Subtotal']; ?></td>
        </tr>
        <?php
        
}
?>
        
          
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th>$<?php echo $Total ?> </th>
            </tr>
        </tfoot>
    </table>

</div>