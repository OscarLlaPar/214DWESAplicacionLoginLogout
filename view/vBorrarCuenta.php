<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-Login Logout - Borrar Cuenta</title>
        <link href="webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
            <h2 class="titulo">Borrar cuenta</h2>
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td><label for="usuario">Nombre de usuario: </label></td>
                        <td><input id="usuario" type="text" name="usuario" readonly value="<?php $aUsuario['nombre'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="descripcion">Descripción de usuario: </label></td>
                        <td><input id="descripcion" type="text" name="descripcion" readonly value="<?php $aUsuario['descripcion'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="fechaHoraUltimaConexion">Descripción de usuario: </label></td>
                        <td><input id="fechaHoraUltimaConexion" type="text" name="fechaHoraUltimaConexion" readonly value="<?php $aUsuario['fechaHoraUltimaConexion']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="numConexiones">Descripción de usuario: </label></td>
                        <td><input id="numConexiones" type="text" name="numConexiones" readonly value="<?php $aUsuario['numConexiones']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="perfil">Descripción de usuario: </label></td>
                        <td><input id="perfil" type="text" name="perfil" readonly value="<?php $aUsuario['perfil']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Contraseña: </label></td>
                        <td><input id="password" type="password" name="password" readonly value="<?php $aUsuario['password']?>"></td>
                    </tr>
                </table>
                <p>¿Estás seguro?</p>
                <button type="submit" name="aceptar" class="boton">Aceptar</button>
                <button type="submit" name="cancelar" class="boton">Cancelar</button>
            </form>
        </main>
    </body>
</html>
