<?php
    $lista1 = [1.5465465,98,-5,3,-5161651,70,900,88];
    $tam1=7;
    function printeaMax($lista,$tam)
    {
        $max = $lista[0];
        for ($i=0;$i<$tam;$i++)
        {
            if ($lista[$i]>$max) 
            {
                $max = $lista[$i];
            }
        }
        print $max;
    }
    printeaMax($lista1,$tam1);
?>