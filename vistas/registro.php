<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formB.css">
    <title>Registrarte</title>
</head>
<body>
    <div class="log-fR">
        <img class="avatar" src="img/logo.jpeg" alt="logo">
        <h1>Nueva cuenta</h1>
        <form action="../modelos/registroU.php" method="post">
            <label for="matricula">Matricula:</label>
            <input type="number" name="matri" >

            <label for="matricula">Nombre Completo:</label>
            <input type="text" name="nombre" >

            <label for="Spegunta">Pregunta de seguridad:</label>
            <select name="opciP" size="1">
                <option value="1">¿Cuál era el nombre de tu primera mascota?</option>
                <option value="2">¿Cuál es el nombre de la ciudad en que naciste?</option>
                <option value="3">¿Cuál era tu apodo de la infacia?</option>
                <option value="4">¿Cuál es el nombre de tu primer amor?</option>
                <option value="5">¿Cuál es el nombre de la ciudad en que se conocieron tus padres?</option>
            </select>
            <input type="text" name="pse" placeholder="Respuesta ">

            <label for="Password">Contraseña:</label>
            <input type="password" name="pass">

            <label for="PasswordC">Confirma la Contraseña:</label>
            <input type="password"  name="passw" >

            <input type="submit" name="Aceptar">
        
            
            

        </form>

      

    </div>


    
    
</body>
</html>