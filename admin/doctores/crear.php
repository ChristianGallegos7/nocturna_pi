<?php

//base de datos
require "./includes/config/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Doctores</title>
</head>
<body>
    <main>
        <h1>Crear Doctor</h1>

        <form action="" method="POST">
            <div>
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto">
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido">
            </div>
            <div>
                <label for="especialidad">Especialidad</label>
                <input type="text" name="especialidad" id="especialidad">

            </div>
            <div>
                <label for="horario">Horario</label>
                <input type="text" name="horario" id="horario">
            </div>

            <button type="submit">Crear</button>
        </form>
    </main>
</body>
</html>