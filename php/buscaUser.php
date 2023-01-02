<?php
    include_once('./conexao.php');

    unset($_SESSION['id']);

    $busca = "SELECT * FROM users WHERE email='" . $_POST['emailUsuario'] . "'";

    $responseUser = mysqli_query($conn, $busca);

    $rowUser = mysqli_fetch_assoc($responseUser);

    if(isset($rowUser)){
        $_SESSION['id'] = $rowUser['id'];
        header('Location: ./buscaDadosUser.php');
    } else {
        $_SESSION['erroBusca'] = true;
        header('Location: ../html/admin.php');
    }
?>