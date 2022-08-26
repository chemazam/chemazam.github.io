<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/master.css">

    <title>coffe_online</title>
</head>

<body>
    <header>
        <div class="log">
            <img src="vistas/img/logo.jpeg" class="log-img" alt="logo coffe online">
            <h2 style="color:white;" class="Coffe_online">coffe_online</h2>
        </div>

        <nav>
            <a href="vistas/registro.php" class="nav-link">Registrarse</a>

        </nav>
    </header>

    <section>
        <br>
        <p>Todos nuestros platillos y bebidas son preparados con la mejor calidad</p>
        <p>Registrate para disfrutar de nuestrosveneficios "Coffe_online"</p>

        <section class="internaS">
            <div class="slider">
                <ul>
                    <li> <img src="vistas/img/aguasf.jpg"></li>
                    <li> <img src="vistas/img/tacos-de-bistec.jpg"></li>
                    <li> <img src="vistas/img/Torta_Cubana.jpg"></li>
                    <li> <img src="vistas/img/chilaquiles-rojos-cocina-mexicana.jpg"></li>
                    <li><img src="vistas/img/co.jpg"></li>
                    <li><img src="vistas/img/da.jpg"></li>
                    <li><img src="vistas/img/eee.jpeg"></li>
                    <li><img src="vistas/img/dd.jpeg"></li>
                    <li><img src="vistas/img/gg.jpeg"></li>
                    <li><img src="vistas/  img/mi.jpg"></li>
                </ul>
            </div>

        </section>
        <p>¡Ser mejor hoy!</p>
        <p>UTTECAM</p>

    </section>
    <div class="log-f">

        <h1>Iniciar sesion</h1><br>
        <form action="modelos/funciones.php" method="post">

            <label for="matricula" required>Matricula:</label>
            <input type="text" name="matri" placeholder="Matricula">

            <label for="Password" required>Contraseña:</label>
            <input type="password" name="pass" placeholder="Contraseña">
            <input type="submit" value="Iniciar">
            <input type="hidden" name="accion" value="acceso_user">


            <a href="contraOLV.php">¿Olvidaste tu contraseña?</a><br>
          

        </form>

    </div>

</body>

</html>