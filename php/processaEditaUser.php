<?php
    include_once('./conexao.php');

    $updateuser = "UPDATE users SET nome='" . $_POST['nomeUser'] . "', senha='" . $_POST['senhaUser'] . "', cpf='" . $_POST['cpfUser'] . "', cnpj='" . $_POST['cnpjUser'] . "', telefone='" . $_POST['telUser'] ."', email='" . $_POST['emailUser'] . "', endereco='" . $_POST['enderecoUser'] . "' WHERE id='" . $_SESSION['id'] . "'";

    $response = mysqli_query($conn, $updateuser);

    header('Location: ./buscaDadosUser.php');
?>