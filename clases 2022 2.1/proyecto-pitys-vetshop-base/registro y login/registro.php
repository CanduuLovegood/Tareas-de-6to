<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-sclae=3.0, minimum-scale=1.0">
        <link rel="stylesheet" href="npm i bootstrap-icons">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <?php include ("../header y footer/header.php");?>

        <form class="formulario">
            <h1>Registrate</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg> <!--esto es el icono--> 
                    <input type="text" placeholder="Nombre de Usuario">
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg> <!--esto es el icono--> 
                    <input type="text" placeholder="Correo">
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                      </svg> <!--esto es el icono--> 
                    <input type="password" placeholder="Contraseña">
                </div>
                <input type="submit" value="Registrarte" class="button">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>Ya tienes cuenta? <a class="link" href="login.php">Inicia Sesion</a></p>
            </div>
        </form>
        <?php include ("../header y footer/footer.php");?>