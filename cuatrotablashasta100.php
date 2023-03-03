<?php
    print("<style>
                table {display: inline-block}
                table, th, td {border: 4px solid; color: darkslategrey; border-collapse: collapse;}
        </style>");
    $num=$_GET["n1"];
    print('<br><input type="button"><a href="form1.php">Volver a formulario</a><br><br>');
    for ($i=0; $i <= 100; $i++) { 
        $res=$num*$i;
        if ($i==0 || $i==25 || $i==50 || $i==75) {
            print("</table>\n<table>\n");
            print("<tr><th>Producto</th><th>Valor</th></tr>");
        }
        print("<tr><td>$num x $i</td><td>$res</td></tr>");
    }
    print("</table><br><br>");
    print("<pre>");
    var_dump($_SERVER);
    print("</pre>");
?>