<?php
  $i1 = readline("cantidad de veces: \n");
  $i2 = "*";
function ejemplo($i1,$i2){
  $cad = "";
  for ($i=0;$i<$i1;$i++)
  {
    $cad=$cad.$i2;
    print($cad."\n");
  }    
};
print ejemplo($i1,$i2);
?>