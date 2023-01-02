<?php
    include_once('./conexao.php');

    $update = "UPDATE animais SET nome='" . $_POST['nomeAnimal'] . "', idade='" . $_POST['idade'] . "', porte='" . $_POST['porte'] . "', raca='" . $_POST['raca'] . "', obs='" . $_POST['obs'] . "' WHERE id='" . $_SESSION['id_animal'] . "'";

    $response = mysqli_query($conn, $update);

    header('Location: ./buscaDadosUser.php');
?>