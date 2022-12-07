<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-sclae=3.0, minimum-scale=1.0">
        <link rel="stylesheet" href="npm i bootstrap-icons">
        <link rel="stylesheet" href="style.css">
    </head>
    <?php include ("../header y footer/header.php");?>
    <body>
        <form class="formulario">
            <h1>Login</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg> <!--esto es el icono--> 
                    <input type="text" placeholder="Nombre de Usuario">
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                      </svg> <!--esto es el icono--> 
                    <input type="password" placeholder="Contraseña">
                </div>
                <input type="submit" value="login" class="button">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>No tienes cuenta? <a class="link" href="registro.php">Registrate</a></p>
            </div>
        </form>
    
        <?php include ("../header y footer/footer.php");?>