<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-Login Logout - Cambiar Contraseña</title>
        <link href="webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
            <h2 class="titulo">Cambiar contraseña</h2>
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td><label for="password">Contraseña actual: </label></td>
                        <td><input id="password" type="password" name="password"></td>
                        <td><?php echo (isset($aErrores['password']))?"<span>".$aErrores['password']."</span>":""; ?></td>
                    </tr>
                    <tr>
                        <td><label for="nuevaPassword">Nueva contraseña: </label></td>
                        <td><input id="nuevaPassword" type="password" name="nuevaPassword"></td>
                        <td><?php echo (isset($aErrores['nuevaPassword']))?"<span>".$aErrores['nuevaPassword']."</span>":""; ?></td>
                    </tr>
                    <tr>
                        <td><label for="confirmarPassword">Confirmar contraseña: </label></td>
                        <td><input id="confirmarPassword" type="password" name="confirmarPassword"></td>
                        <td><?php echo (isset($aErrores['confirmarPassword']))?"<span>".$aErrores['confirmarPassword']."</span>":""; ?></td>
                    </tr>
                </table>
                <button type="submit" name="aceptar" class="boton">Aceptar</button>
                <button type="submit" name="cancelar" class="boton">Cancelar</button>
            </form>
        </main>
    </body>
</html>
