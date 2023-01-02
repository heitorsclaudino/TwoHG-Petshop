<?php
    include_once('./conexao.php');

    $alterar = "UPDATE admins SET nome='" . $_POST['nomeAdm'] . "', senha='" . $_POST['senhaAdm'] . "', cpf='" . $_POST['cpfAdm'] . "', telefone='" . $_POST['telAdm'] . "', email='" . $_POST['emailAdm'] . "', endereco='" . $_POST['enderecoAdm'] . "', cargo='" . $_POST['cargo'] . "'";

    $response = mysqli_query($conn, $alterar);

    header('Location: ./buscaDadosAdm.php');
?>