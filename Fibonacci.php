<?php
function fibonacci($num){
$n =0;
$n1 = 1;


echo $n."\n";
echo $n1."\n";


    for ($i=2; $i <=$num ; $i++){
        
        $suma =$n+$n1;
        $n=$n1;
        $n1=$suma;
        echo $suma."\n";
    
    }
    

    
}

fibonacci($_POST['numero']);


?>