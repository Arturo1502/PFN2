<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/logo.jpg">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/styles.css/login.css">
    <script src="https://kit.fontawesome.com/2ed691f658.js" crossorigin="anonymous"></script>

</head>

<body>
    <img class="foto mx-auto  w-auto" src="../assets/logo.jpg" alt="Your Company">
    <div class="box">
        <form class="form" action="../index.php?controller=AuthController&action=login" method="POST">
            <h2>Bienvenido ingresa con tu cuenta</h2>
            <div class="input-icon">
                <input type="email" name="email" placeholder="Email" />
                <i class="fas fa-envelope"></i>
            </div>
            <div class="input-icon">
                <input type="password" name="password" placeholder="Password" />
                <i class="fas fa-lock"></i>
            </div>
            <button class="submit-button" type="submit">Ingresar</button>
        </form>
    </div>
    <br>
    <br>
    <div class="box1">
        <ul class="lista">
            <h3 class="mb-2">Informacion Acceso</h3>
            <hr class="divider mb-5">
            <h4 class="mb-2">Admin</h4>
            <li class="mb-2">User: admin@admin</li>
            <li class="mb-2">Pass: admin</li>
            <h4 class="mb-2">Maestros</h4>
            <li class="mb-2">User: maestro@maestro</li>
            <li class="mb-2">Pass: maestro</li>
            <h4 class="mb-2">Alumno</h4>
            <li class="mb-2">User: ***********</li>
            <li class="mb-2">Pass: *****</li>
        </ul>
    </div>


</body>

</html>

