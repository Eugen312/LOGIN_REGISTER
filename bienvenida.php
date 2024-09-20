<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por Favor debes iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();       
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Compsertec</title>
</head>
<body>
    <H1>Bienvenido a Compsertec</H1>
    <a href="php/cerrar_session.php">Cerrar session</a>
</body>
</html>