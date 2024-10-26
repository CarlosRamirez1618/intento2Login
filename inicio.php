<?php
include("conexion.php"); // Incluye tu archivo de conexión a la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=DynaPuff:wght@400..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Rubik+Wet+Paint&family=Sevillana&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/tabla.css"> 
    
    </head>
<body>
    
<ul class="navegacion">
    <li class="navegacion-item">
        <a class="navegacion-enlace activo" href="inicio.php">Modificar</a>
    </li>
    <li class="navegacion-item">
        <a class="navegacion-enlace" href="eliminar.php">Eliminar</a>
    </li>
    <li class="navegacion-item">
        <a class="navegacion-enlace" href="nuevo.php">Nuevo</a>
    </li>
</ul>


    <div class="container mt-5"> 
        <h3 class="text-center">Usuarios</h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="table-header">#</th>
                    <th class="table-header">User</th>
                    <th class="table-header">Password</th>
                    <th class="table-header">Acciones</th>
                </tr>
                
            </thead>
            <tbody>
                <?php include 'modificarExistente.php'; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
