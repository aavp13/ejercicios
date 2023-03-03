<?php
//Pide un mes y un año y da los dias de ese mes, funcional con bisiestos

$year = readline("Introduzca un año: ");
$mes = (readline("Introduzca un mes: "));
function queMes($mes,$year){
    $arr = array("enero" => 31,"febrero"=> 28,"marzo"=> 31,"abril"=> 30,"mayo"=> 31,"junio"=> 30,"julio"=> 31,"agosto"=> 31,"septiembre"=> 30,"octubre"=> 31,"noviembre"=> 30,"diciembre"=> 31);
    $mes=strtolower($mes);
    if (esBisiesto($year)==true && $arr[$mes]==28) {
        return ("Este febrero del año $year tuvo 29 dias");
    }
    else {
        return "El mes de $mes del año $year tiene ".$arr[$mes]." dias";
    }    
}
function esBisiesto($year){
    $valor=null;
    if ((($year%4==0) && ($year%100!=0)) || ($year%400==0) ) {
        $valor=true;
    }
    else {
        $valor=false;
    }
    return $valor;
}
print(queMes($mes,$year));