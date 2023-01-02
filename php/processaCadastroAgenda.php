<?php
    include_once('./conexao.php');

    $user_id =  $_SESSION['id'];
    $user_name =  $_SESSION['usuario']['nome'];
    $nome_animal =  $_POST['nomeAnimal'];
    $servico =  $_POST['servico'];
    $data_hora =  $_POST['data'] . " | " . $_POST['hora'];


    $verifica = "SELECT * FROM agendamentos WHERE data_hora='$data_hora'" ;

    $response = mysqli_query($conn, $verifica);

    $row = mysqli_fetch_assoc($response);

    if(isset($row)){
        $_SESSION['erroAgenda'] = true;
        header('Location: ../html/cadastraAgenda.php');
    } else {
        $inserir = "INSERT INTO agendamentos (`user_id`, `user_name`, nome_animal, servico, data_hora)
                    VALUES ('$user_id', '$user_name', '$nome_animal', '$servico', '$data_hora')";

        $responseInserir = mysqli_query($conn, $inserir);

        header('Location: ./buscaDadosUser.php');
    }
?>