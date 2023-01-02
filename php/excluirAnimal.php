<?php
    include_once('./conexao.php');
    
    $deleteAgendas = "DELETE FROM agendamentos WHERE nome_animal=" . $_GET['nomeAnimal'];

    $responseDelete = mysqli_query($conn, $deleteAgendas);

    $delete = "DELETE FROM animais WHERE id='" . $_SESSION['id_animal'] . "'";

    $response = mysqli_query($conn, $delete);

    header('Location: ./buscaDadosUser.php');
?>