<?php
    include "../templates/header.php";
?>
    <main>
        <h1>Crear Doctor</h1>

        <form action="" method="POST" enctype="" class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <div>
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto">
                </div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido">
                </div>
                <div>
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" name="especialidad" id="especialidad">

                </div>
                <div>
                    <label for="horario">Horario:</label>
                    <input type="text" name="horario" id="horario">
                </div>

                <button type="submit" class="btn-verde">Añadir Doctor</button>
            </fieldset>
        </form>
    </main>
</body>

</html>