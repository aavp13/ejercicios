<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de fotos</title>
    <style>
        table,tr,td{
            border:2px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>La Famosa Galeria de Alvaro Vellido</h1>    
    <table>
        <?php
            $limit=$_GET["limit"];
            $cols=$_GET["cols"];
            for ($i=1; $i <= $limit; $i++) #para fotos
            { 
                echo"<tr>";
                for ($j=1; $j <= $cols ; $j++) { 
                    print("<td>"."<img src='https:picsum.photos/id/$i/300/200'>"."</td>");
                }
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>