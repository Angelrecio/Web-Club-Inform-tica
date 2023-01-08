<?php
    require "assets/request/conexion.php"
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <h1>Talleres</h1>
    <?php
        echo "0 <br>";
        $ask = "SELECT * FROM talleres";
        echo $ask."<br>";
        $query = $conn -> query ($ask);
        while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<p>'.$valores["titulo"].'</p>';
        }

        echo 2;
        $conn -> close();
    ?>
</body>
</html>