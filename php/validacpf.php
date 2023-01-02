<?php

function validacpf($cpf){

    $repete = substr_count($cpf, $cpf[0]);

    if($repete == 11){
        return false;
    }

    $cpf = str_split($cpf);

    $completo = $cpf;

    array_pop($cpf);
    array_pop($cpf);


    // Digito 1
    $contador = 10;
    $soma = 0;

    for($i = 0; $i<9; $i++){
        $soma += $cpf[$i] * $contador;
        $contador--;
    }

    $resto = $soma % 11;

    if($resto < 2){
        $digito1 = 0;
    } else {
        $digito1 = 11 - $resto;
    }

    // echo $digito1;

    array_push($cpf, $digito1);

    // Digito 2
    $contador = 11;
    $soma = 0;

    for($i = 0; $i<10; $i++){
        $soma += $cpf[$i] * $contador;
        $contador--;
    }

    $resto = $soma % 11;

    if($resto < 2){
        $digito2 = 0;
    } else{
        $digito2 = 11 - $resto;
    }

    // echo $digito2;

    if($digito1 == $completo[9] && $digito2 == $completo[10]){
        // echo "cpf correto";
        return true;
    } else {
        // echo "cpf errado";
        return false;
    }
}
?>