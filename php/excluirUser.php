<?php
    include_once('./conexao.php');

    $deleteAgenda = "DELETE FROM agendamentos WHERE `user_id`='" . $_SESSION['id'] . "'";

    $responseAgenda = mysqli_query($conn, $deleteAgenda);

    $deleteAnimais = "DELETE FROM animais WHERE dono_id='" . $_SESSION['id'] . "'";

    $responseAnimais = mysqli_query($conn, $deleteAnimais);

    $delete = "DELETE FROM users WHERE id='" . $_SESSION['id'] . "'";

    $response = mysqli_query($conn, $delete);

    header('Location: ./logout.php');
?>