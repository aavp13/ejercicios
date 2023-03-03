<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Noticias</h1>
    <table>
        <tr>
            <?php
            # columna titulo
            ########COMPROBAR CON BDD PROFESOR########

            $ip="192.168.48.28";
            $usu="pruebas";
            $pass="pruebas";
            $nombre_bd="pruebas";
            $conexion = mysqli_connect($ip,$usu,$pass,$nombre_bd);

            if ($conexion) {
                $quer="SELECT * FROM noticias";
                $res=mysqli_query($conexion,$quer);
                if (mysqli_num_rows($res)>0) {
                    print(mysqli_num_rows($res)."<br>");
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<table><tr style='border: 1px solid #C00;'><td>". "id: " . $row["id"] . " Name: " . $row["titulo"]."</td></tr>" ;
                    }
                }
                else {
                    print("Su consulta no ha devuelto resultados . . .");
                }
                
            }
            else {
                print("Connection failed (mensje diseñado):" . mysqli_connect_error());
            }
            mysqli_close($conexion);

            ?>
    </table>
</body>
</html>

