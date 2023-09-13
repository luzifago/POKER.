<?php
$valor =$_POST ['costo'];
$porcentaje =$_POST ['descuento'];

function calcularDescuento (int $valor, float $porcentaje){

    $descuento= (($valor-($valor * $porcentaje) /100));

    $total = $descuento;

    echo "$total";
    
}

calcularDescuento($valor, $porcentaje);



?>