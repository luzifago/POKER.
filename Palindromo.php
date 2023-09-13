<?php
function palindromo( string $palabra){
    $pa=str_replace(" ","", $palabra);
    $minusculas= strtolower($pa);
    $convertir= strrev($minusculas);
    if(!empty($palabra)){
    if($minusculas == $convertir){
        echo" la palabra $minusculas, es palindromo";
    }
    else{
        echo"la palabra no es palindromo";
    }
    }
    else{
        echo"ingrese una palabra";
    }
}
palindromo($_POST['palabra']);
?>