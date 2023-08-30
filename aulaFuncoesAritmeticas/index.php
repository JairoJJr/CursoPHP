<?php
//exercício de array aprendendo algumas funções aritmeticas do PHP

    $r = ["abs(-2000)" => abs(-2000) , "base_convert(254,10,8)" => base_convert(254,10,8) , "ceil(1.4)" => ceil(1.4) , "floor(1.4)" => floor(1.4) , "round(1.4)" => round(1.4) , "hypot(45 , 30)" => hypot(45 , 30) , "intdiv(9,2)" => intdiv(9,2) , "min(5,2)" => min(5,2) , "max(3,5,6,7,2)" => max(3,5,6,7,2), "pi()" => pi() , "M_PI" => M_PI , "pow(5,2)" => pow(5,2) , "sin(30)" => sin(30) , "cos(30)" => cos(30) , "tan(30)" => tan(30) , "sqrt(144)" => sqrt(144)];
    
    echo "Imprimindo na tela usando print_r: <br>";
    echo "<pre>";
    print_r($r);
    echo "</pre>";
    
    echo "Imprimindo na tela usando for com array_keys e array_values: <br><br>";
    $chaves = array_keys($r);
    $valores = array_values($r);
    for ($i = 0; $i < count($r) ; $i++) {
        echo $chaves[$i] . " < <strong>RESULTA EM</strong> >: " . $valores[$i] . "<br>";
    }
?>