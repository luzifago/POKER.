<?php
function sumarDigitos($numero) {
    $suma = 0;
    $numeroStr = (string)$numero;
    
    
    for ($i = 0; $i < strlen($numeroStr); $i++) {
        $suma += intval($numeroStr[$i]);
    }
    
    return $suma;
}

$numero = 12345;
$resultado = sumarDigitos($numero);
echo "La suma de los dígitos de $numero es: $resultado";

?>