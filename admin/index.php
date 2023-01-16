<?php
    session_start();
 
    // Compruebe si el usuario ha iniciado sesión
    if (!isset($_SESSION['id'])) {
        header("location: ../login.php");
        exit;
    }
 
    // Conexión a la base de datos
    $db = mysqli_connect("localhost", "admin", "password", "baseDatos");
?>

<!DOCTYPE html>
<html>
<head>
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <title>Administración</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['nombreUsuario']; ?>!</h1>
    <h2>Ver talleres</h2>
    <table>
        <tr>
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Descripción</th>
        </tr>
        <?php
        $sql = "SELECT * FROM talleres";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["descripcion"]."</td></tr>";
        }
        ?>
    </table>
 
    <h2>Añadir talleres</h2>
    <form action="admin.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name">
        <br>
        <label for="desc">Descripción:</label>
        <input type="text" name="desc">
        <br>
        <input type="submit" name="taller_submit" value="Añadir taller">
    </form>
 
    <h2>Ver gente en talleres</h2>
    <table>
        <tr>
            <th>ID del taller</th> 
            <th>ID del usuario</th> 
            <th>Nombre del usuario</th>
        </tr>
        <?php
        $sql = "SELECT * FROM talleres_usuarios";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $sql2 = "SELECT nombreUsuario FROM usuarios WHERE id='".$row["usuario_id"]."'";
            $result2 = mysqli_query($db, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo "<tr><td>".$row["taller_id"]."</td><td>".$row["usuario_id"]."</td><td>".$row2["nombreUsuario"]."</td></tr>";
        }
        ?>
    </table>
 
    <h2>Ver proyectos</h2>
    <table>
        <tr>
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Descripción</th>
        </tr>
        <?php
        $sql = "SELECT * FROM proyectos";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["descripcion"]."</td></tr>";
        }
        ?>
    </table>
 
    <h2>Añadir proyectos</h2>
    <form action="admin.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name">
        <br>
        <label for="desc">Descripción:</label>
        <input type="text" name="desc">
        <br>
        <input type="submit" name="proyecto_submit" value="Añadir proyecto">
    </form>
 
    <h2>Añadir competición y ver gente en competiciones</h2>
    <table>
        <tr>
            <th>ID de la competición</th>
            <th>ID del usuario</th> 
            <th>Nombre del usuario</th>
        </tr>
        <?php
        $sql = "SELECT * FROM competiciones_usuarios";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $sql2 = "SELECT nombreUsuario FROM usuarios WHERE id='".$row["usuario_id"]."'";
            $result2 = mysqli_query($db, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo "<tr><td>".$row["competicion_id"]."</td><td>".$row["usuario_id"]."</td><td>".$row2["nombreUsuario"]."</td></tr>";
        }
        ?>
    </table>
    <form action="admin.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name">
        <br>
        <label for="desc">Descripción:</label>
        <input type="text" name="desc">
        <br>
        <input type="submit" name="competicion_submit" value="Añadir competición">
    </form>
    <br>
    <a href="/">Volver</a>
</body>
</html>