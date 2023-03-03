<?php
print("Operaciones Disponibles:\n"."1.- Area del Circulo\n"."2.- Area del Cilindro\n"."3.- Area del Cono\n");
$oper=(readline("Introduzca la operacion que desea: "));
strtolower($oper);
if ($oper=="circulo" || $oper==1) 
{
$rad=readline("Introduzca el valor para el radio");
print(areaCirculo($rad));
} 
else if ($oper=="cilindro" || $oper==2){
$h=readline("Introduzca el valor para la altura");
$rad=readline("Introduzca el valor para el radio");
print(volCilindro($rad,$h));
}
else if ($oper=="cono" || $oper==3){
$h=readline("Introduzca el valor para la altura");
$rad=readline("Introduzca el valor para el radio");
print(volCono($rad,$h));
};

function areaCirculo($rad){
    $valor=($rad**2);
    return $valor;
};
function volCilindro($rad,$h){
    $res=areaCirculo($rad)*$h*3.1415;
    return $res;
};
function volCono($rad,$h){
    $res=(volCilindro($rad,$h))/3;
    return $res;
};