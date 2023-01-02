<?php
    include_once('./conexao.php');

    $nome = $_POST['userNome'];
    $senha = $_POST['userSenha'];
    $cpf = $_POST['userCpf'];
    $cnpj = $_POST['userCnpj'];
    $tel = $_POST['userTel'];
    $endereco = $_POST['userEndereco'];


    $inserir = "UPDATE users
                SET nome='$nome', senha='$senha', cpf='$cpf', cnpj='$cnpj', telefone='$tel', endereco='$endereco'
                WHERE id='" . $_SESSION['userDados']['id'] . "'";

    $response = mysqli_query($conn, $inserir);

    header('Location: ./pesquisaPessoa.php');
?>