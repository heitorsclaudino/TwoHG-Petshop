<?php

function validacnpj($cnpj){
    $cnpj = str_split($cnpj);

    $completo = $cnpj;

    array_pop($cnpj);
    array_pop($cnpj);

    // Digito 1
    $contador = 5;
    $soma = 0;

    for($i=0; $i<4; $i++){
        $soma += $cnpj[$i] * $contador;
        $contador--;
    }

    $contador = 9;
    
    for($i=4; $i<12; $i++){
        $soma += $cnpj[$i] * $contador;
        $contador--;
    }

    $resto = $soma % 11;

    if($resto < 2){
        $digito1 = 0;
    } else{
        $digito1 = 11 - $resto;
    }

    // echo $digito1;

    array_push($cnpj, $digito1);

    // Digito 2
    $contador = 6;
    $soma = 0;

    for($i=0; $i<5; $i++){
        $soma += $cnpj[$i] * $contador;
        $contador--;
    }

    $contador = 9;

    for($i=5; $i<13; $i++){
        $soma += $cnpj[$i] * $contador;
        $contador--;
    }

    $resto = $soma % 11;

    if($resto < 2){
        $digito2 = 0;
    } else {
        $digito2 = 11 - $resto;
    }

    if($digito1 == $completo[12] && $digito2 == $completo[13]){
        return true;
    } else {
        return false;
    }
}
?>