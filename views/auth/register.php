<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">
                <img src="http://localhost/dashboard/nocturna_pi/build/images/logo.png" alt="LOGO">
            </a>
        </nav>
    </header>
    <div class="main">
        <h2>Registro</h2>
        <form action="#" method="post" id="registerForm">
            <label for="cedula">Cedula:</label>
            <input type="number" id="cedula" name="cedula" required>

            <label for="firstName">Nombre:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Apellido:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Repetir Contraseña:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Registrar</button>
        </form>
        <label>Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a> </label>
    </div>
</body>

</html>