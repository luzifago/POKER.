<?php
function FierroAlv() {
    for ($i = 1; $i <= 100; $i++) {
        $pluma = "";

        if ($i % 3 === 0) {
            $pluma .= "Peso";
        }
        
        if ($i % 5 === 0) {
            $pluma .= "Pluma";
        }

        echo ($pluma !== "") ? $pluma : $i;
        echo "\n";
    }
}
FierroAlv();
?>