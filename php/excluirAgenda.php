<?php
    include_once('./conexao.php');

    $agendamento = $_GET['id'];

    $delete = "DELETE FROM agendamentos WHERE id=$agendamento";

    $response = mysqli_query($conn, $delete);

    header('Location: ./buscaDadosUser.php');
?>