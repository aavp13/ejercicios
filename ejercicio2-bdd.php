<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{border: 2px solid black; border-collapse:collapse ;}
        td{border: 2px solid black; border-collapse: collapse;}
        #master{background-color: lightslategray; width: 95%; height: 100%; margin-left: 3%;}
        .reg{width: 100%;}
    </style>
</head>
<body>
    <h1>Noticias</h1>
    
    <div id="master">
        <table>
                <?php
                # columna titulo
                ########COMPROBAR CON BDD PROFESOR########

                $ip="192.168.48.28";
                $usu="pruebas";
                $pass="pruebas";
                $nombre_bd="pruebas";
                $conexion = mysqli_connect($ip,$usu,$pass,$nombre_bd);

                if ($conexion) {
                    $quer="SELECT id,titulo,texto,url,categoria,fecha FROM noticias";
                    $res=mysqli_query($conexion,$quer);
                    if (mysqli_num_rows($res)>0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo 
                            "<div class='reg'><tr><td style='width: 8%'>"." id: " . $row["id"]."</td></div>".
                            "<div class='reg'><td style='width: 19%'>"." Name: ".$row["titulo"]."</td></div>".
                            "<div class='reg'><td style='width: 30%'>"." Texto: ".$row["texto"]."</td></div>".
                            "<div class='reg'><td style='width: 19%'>"." Categoria: ".$row["categoria"]."</td></div>".
                            "<div class='reg'><td style='width: 19%'>"." url: ".'<a href="$row["url\""]"></a>'."</td></div>".
                            "<div class='reg'><td style='width: 10%'>"." fecha ".$row["fecha"]."</td></tr></div>" ;
                        }
                    }
                    else {
                        print("Su consulta no ha devuelto resultados . . .");
                    }
                    
                }
                else {
                    print("Connection failed (mensje diseñado):" . mysqli_connect_error("La base de datos no se encuentra disponible en este momento, disculpe"));
                }
                mysqli_close($conexion);
                ?>
        </table>
    </div>
</body>
</html>

