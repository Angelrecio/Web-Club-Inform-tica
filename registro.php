<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
</head>
    <body>
    <h1>Sign In</h1>
    <form action="registro_a.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required>
        <br>

        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="apellido2" required>
        <br>

        <label for="n-exp">Número de expediente:</label>
        <input type="number" id="nexp" name="nexp" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="role">Rol:</label>
        <input type="number" id="role" name="role" required>
        <br>
        
        <input type="submit" value="registrar" name="submit">
        </form>
    </body>
</html>

