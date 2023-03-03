<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {border: 4px solid; color: darkslategrey; border-collapse: collapse;}
        body {font-family: 'Trebuchet MS'}
    </style>

    <title>Tabla del siete</title>
</head>
<body>
    <h1>By Alvaro Manuel Vellido Pardo</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Valor</th>
        </tr>
        <tr>
            <?php
                for ($i=0; $i <= 40; $i++) { 
                    $res=7*$i;
                    print("<td>7 x $i</td>");
                    print("<td>$res</td>");
                    print("</tr>");
                }
            ?>
    </table>
</body>
</html>
