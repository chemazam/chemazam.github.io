<head>
    <div id="sidebar">

        <div class="toggle-btn">
            <span>
                <ion-icon name="person-outline"></ion-icon>
            </span>
        </div>

        <ul>
            <li>


                <a href="#">Matricula: <?php echo  $_SESSION['matri']; ?></a><br>
                <a href="#">Nombre: <?php echo $nr['nombre']; ?> </a>

            </li>
            <li> <a href="#">Cambiar contraseña</a> </li>
            <li> <a href="Admin/cerrarses.php">Cerrar sesion</a> </li>

        </ul>


    </div>
</head>