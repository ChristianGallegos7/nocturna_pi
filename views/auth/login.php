<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">
                <img src="http://localhost/dashboard/nocturna_pi/build/images/logo.png" alt="LOGO">
            </a>
        </nav>
    </header>
    <main>
        <h1>Iniciar Sésion</h1>
        <form action="#" method="post" id="loginForm">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <label>¿No tienes una cuenta? <a href="./register.php">Crear cuenta</a></label>
    </main>
</body>

</html>