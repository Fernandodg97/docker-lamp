<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCKER-LAMP</title>
</head>
<body>
    <h1>Hola, mundo!</h1>
        <?php
            $host = "db";
            $usuario = "root";
            $contrasena = "admin";
            $db = "dbname";
            $con = new mysqli($host,$usuario,$contrasena,$db);

            if($con->connect_errno){
                die('DB: CONEXIÓN FALLIDA '.$con->connect_error);
            }
            echo "DB: CONEXIÓN EXITOSA";
        ?>
    
</body>
</html>