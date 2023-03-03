<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar</title>
    <style>

    </style>
</head>
<body>
    <div style="width: 75%; margin-left: 5%">
        <form action="galeria.php" method="GET">
            <label for="limit">Numero de fotografias</label>
            <input type="number" name="limit">
            <br>
            <label for="cols">Numero de Columnas</label>
            
            <select name="cols">
                <?php
                for ($i=1; $i <=10 ; $i++) { 
                    echo("<option value='$i'><p>$i</p></option>");
                }
                ?>
            </select>
            <br>
            <button type="submit">Enviar formulario</button>
        </form>
    </div>
 </body>
</html>