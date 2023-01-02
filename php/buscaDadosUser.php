<?php
    include_once('./conexao.php');

    // Busca de dados do usuário

    $consultaUsers = "SELECT nome, senha, cpf, cnpj, telefone, email, endereco FROM users WHERE id='" . $_SESSION['id'] . "'";

    $response1 = mysqli_query($conn, $consultaUsers);

    $dadosUser = mysqli_fetch_assoc($response1);

    $_SESSION['usuario'] = $dadosUser;


    // Busca de dados dos animais dele

    $consultaAnimais = "SELECT id, animal, nome, idade, porte, raca, obs FROM animais WHERE dono_id='" . $_SESSION['id'] . "'";

    $response2 = mysqli_query($conn, $consultaAnimais);

    $dadosAnimais = mysqli_fetch_all($response2, MYSQLI_ASSOC);

    $_SESSION['animais'] = $dadosAnimais;

    // Busca da dados dos agendamentos dele

    $consultaAgenda = "SELECT `user_name`, `user_id`, id, nome_animal, servico, data_hora FROM agendamentos WHERE `user_id`='" . $_SESSION['id'] . "'";

    $response3 = mysqli_query($conn, $consultaAgenda);

    $dadosAgenda = mysqli_fetch_all($response3, MYSQLI_ASSOC);

    $_SESSION['agendas'] = $dadosAgenda;

    header('Location: ../html/usuario.php');

?>