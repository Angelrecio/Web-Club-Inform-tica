<?php

if (isset($_COOKIE["Block"])){
	header("Location: /");
}

require "assets/request/conexion.php";
session_start();

$error = "";

if (isset($_POST['submit'])) {
    $actual = $_POST['actual'];
    $nueva = $_POST['nueva'];
    $confirmar = $_POST['confirmar'];
    

    // Escapar caracteres especiales en el nombre de usuario y la contraseña
    $actual = md5(mysqli_real_escape_string($conn, $actual));
    $nueva = mysqli_real_escape_string($conn, $nueva);
    $confirmar = mysqli_real_escape_string($conn, $confirmar);
    $id = $_SESSION['id'];
 

    // Consulta para comprobar si el usuario y la contraseña existen en la base de datos
    $query = "SELECT * FROM usuarios WHERE id='$id'";
    //echo $query."<br>";

    $results = mysqli_query($conn, $query);


    if (mysqli_num_rows($results) > 0) {
        
        // Recorre cada fila de los resultados
        while ($row = mysqli_fetch_assoc($results)) {
            $password = $row["pass"];
            
        }
        if ($actual == $password && $nueva == $confirmar){
            $hash_password = md5($nueva);
            $sql = "UPDATE usuarios SET pass = '$hash_password' WHERE id=$id;";
            

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                //echo "Error: failed to prepare the SQL statement";
            } else {
                // Execute the SQL statement
                if (mysqli_stmt_execute($stmt)) {
                    //echo "Contraseña cambiada con éxito";
                    sleep(3);
                    header("Location: logout.php");
                } else {
                    $error = "Error: El cambio de contraseña a fallado";
                }
    
            }

        }else{
            $error = "Las contraseñas no coinciden";
        }

    } else {
        $error = "Ha ocurrido un error";
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>C-int|Cambio de contraseña</title>
</head>
<body style=" flex-direction: column; background-color: rgb(222, 56, 49);">
    <form method="post" action="cambioPass.php">
        <div id = "log_pro">
            <div id = footer_log>
                <label for="Actual" class = "login">Cotraseña actual:</label>
                <input type="password" name="actual" placeholder="Contraseña actual">
                <br>

                <label for="nueva" class = "login">Nueva contraseña</label>
                <input type="password" name="nueva" placeholder="Nueva contraseña">
                <br>

                <label for="confirmar" class = "login">Confirmar contraseña</label>
                <input type="password" name="confirmar" placeholder="Confirmar contraseña">
                <br>

                <input type="submit" name="submit" value="Actualizar">

                <?php
                    echo "<br>".$error;
                ?>
            </div>
        </div>
    </form>
</body>
</html>