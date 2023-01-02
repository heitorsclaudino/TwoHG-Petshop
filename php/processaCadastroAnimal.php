<?php
    include_once('./conexao.php');

    $dono_id = $_SESSION['id'];
    $animal = $_POST['animal'];
    $nomeAnimal = $_POST['nomeAnimal'];
    $idade = $_POST['idade'];
    $porte = $_POST['porte'];
    $raca = $_POST['raca'];
    $obs = $_POST['obs'];


    if(isset($raca) && !isset($obs)){
        $consulta = "INSERT INTO animais (dono_id, animal, nome, idade, porte, raca)
                    VALUES ('$dono_id', '$animal', '$nomeAnimal', '$idade', '$porte', '$raca')";
        
    } else if (isset($obs) && !isset($raca)){
        $consulta = "INSERT INTO animais (dono_id, animal, nome, idade, porte, obs)
                    VALUES ('$dono_id', '$animal', '$nomeAnimal', '$idade', '$porte', '$obs')";
        
    } else if (isset($raca) && isset($obs)){
        $consulta = "INSERT INTO animais (dono_id, animal, nome, idade, porte, raca, obs)
                    VALUES ('$dono_id', '$animal', '$nomeAnimal', '$idade', '$porte', '$raca', '$obs')";

    } else {
        $consulta = "INSERT INTO animais (dono_id, animal, nome, idade, porte)
                    VALUES ('$dono_id', '$animal', '$nomeAnimal', '$idade', '$porte')";
    }

    $response = mysqli_query($conn, $consulta);

    header('Location: ./buscaDadosUser.php');
?>