<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-Login Logout - Iniciar Sesión</title>
        <link href="../webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Iniciar sesión</h2>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td><label for="usuario">Nombre de usuario: </label></td>
                    <td><input id="usuario" type="text" name="usuario"></td>
                </tr>
                <tr>
                    <td><label for="password">Contraseña: </label></td>
                    <td><input id="password" type="password"></td>
                </tr>
            </table>
            <button type="submit" name="login">Iniciar sesion</button>
        </form>
    </body>
</html>
