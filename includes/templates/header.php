<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITAS MEDICAS</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .cuenta:hover{
            color: white;
        }
    </style>
</head>

<body class="animate__animated animate__fadeIn">

    <header class="header__section" id="header">
        <div class="nav__container">
            <nav class="nav animate__animated animate__fadeInDown">
                <img class="logo animate__animated animate__fadeInLeft" src="./build/images/logo.png" alt="ayudae">
                <ul class="nav__list inicio animate__animated animate__fadeIn">
                    <li>
                        <a class="center" href="#header">Inicio</a>
                    </li>
                    <li>
                        <a class="center" href="#main">Especialidades</a>
                    </li>
                </ul>
                <ul class="nav__list animate__animated animate__fadeIn">
                    <li>
                        <a href="/views/auth/login.php" class="boton auth animate__animated animate__fadeInRight">Login</a>
                    </li>
                    <li>
                        <a href="/views/auth/register.php" class="boton auth animate__animated animate__fadeInRight">Register</a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="header__info">
            <div class="header__image">
                <img src="./build/images/img-1.png" alt="">
            </div>
            <div class="header__text">
                <h1>CITAS MEDICAS</h1>
                <p>Nuestro servicio está disponible en la ciudad de Quito.</p>
                <p>Para agendar una cita deber crear una cuenta!</p>
                <a href="/views/auth/register.php" class="boton cuenta">Crear cuenta</a>
            </div>
        </div>
    </header>