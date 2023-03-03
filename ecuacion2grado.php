<?php
# -b +- raiz(b2-4ac) / 2a
$coefa=readline("Introduzca el Coeficiente de 2º Grado: \n");
$coefb=readline("Introduzca el Coeficiente de 1º Grado: \n");
$coefc=readline("Introduzca el termino independiente: \n");
$raiz=sqrt(($coefb**2)-(4*$coefa*$coefc));
if($raiz==0){
  $arriba=((-$coefb+$raiz)/(2*$coefa));
  print("El resultado de la solucion única es $arriba \n");
} else if ($raiz > 0){
  $arriba=((-$coefb+$raiz)/(2*$coefa));
  $abajo=((-$coefb-$raiz)/(2*$coefa));
  print("El resultado de la solucion A es $arriba \n");
  print("El resultado de la solucion B es es $abajo \n");
} else {
  print("esta ecuación no tiene solucion, al menos real\n");
}
print("EOF\n");
?>