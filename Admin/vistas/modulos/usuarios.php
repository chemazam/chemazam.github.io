<div class="seccion2" id="usuariosl">
    <h2 style="color:black;" class="lista-productos">Gestor de Usuarios:</h2>

    <div class="tablaC">
        <table class="table-usuarios" style="color:black;">
            <thead>
                <tr>

                    <th class="Ttitle"> Matricula </th>
                    <th class="Ttitle"> Nombre </th>
                    <th class="Ttitle"> Saldo </th>
                    <th class="Ttitle"> Contraseña </th>
                    <th class="Ttitle"> Rol </th>
                    <th class="Ttitle">...</th>

                    < </tr>
            </thead>
            <tbody>
                <?php

$conexion=mysqli_connect("localhost","root","","cafeteria");               
$SQL="SELECT usuarios.ID_matricula, usuarios.nombre, usuarios.saldo, usuarios.password, admi.cargo FROM usuarios
LEFT JOIN admi ON usuarios.ID_tipo = admi.ID $where";
$dato = mysqli_query($conexion, $SQL);

    while($fila=mysqli_fetch_array($dato)){
    
?>
                <tr>
                    <td><?php echo $fila['ID_matricula']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['saldo']; ?></td>
                    <td><?php echo $fila['password']; ?></td>
                    <td><?php echo $fila['cargo']; ?></td>
                    <td> <a href="">Agregar saldo</td>


                </tr>


                <?php
    }

?>
            </tbody>
        </table>
    </div>

</div>