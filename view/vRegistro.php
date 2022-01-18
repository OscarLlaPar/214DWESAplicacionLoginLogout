<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-Login Logout - Iniciar Sesión</title>
        <link href="webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
            <h2 class="titulo">Iniciar sesión</h2>
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td><label for="usuario">Nombre de usuario: </label></td>
                        <td><input id="usuario" type="text" name="usuario" <?php echo (isset($_REQUEST['usuario']))?'value="'.$_REQUEST['usuario'].'"':"" ?>></td>
                        <?php echo (isset($aError['usuario']))?"<td><span>".$aError['usuario']."</span></td>":""; ?>
                    </tr>
                    <tr>
                        <td><label for="descripcion">Descripción de usuario: </label></td>
                        <td><input id="descripcion" type="text" name="descripcion" <?php echo (isset($_REQUEST['descripcion']))?'value="'.$_REQUEST['descripcion'].'"':"" ?>></td>
                        <?php echo (isset($aError['descripcion']))?"<td><span>".$aError['descripcion']."</span></td>":""; ?>
                    </tr>
                    <tr>
                        <td><label for="password">Contraseña: </label></td>
                        <td><input id="password" type="password" name="password"></td>
                        <?php echo (isset($aError['password']))?"<td><span>".$aError['password']."</span></td>":""; ?>
                    </tr>
                    <tr>
                        <td><label for="confirmarPassword">Confirmar contraseña: </label></td>
                        <td><input id="confirmarPassword" type="password" name="confirmarPassword"></td>
                        <?php echo (isset($aError['confirmarPassword']))?"<td><span>".$aError['confirmarPassword']."</span></td>":""; ?>
                    </tr>
                </table>
                <button type="submit" name="registro" class="boton">Registrarse</button>
                <button type="submit" name="cancelar" class="boton">Cancelar</button>
            </form>
        </main>
    </body>
</html>
