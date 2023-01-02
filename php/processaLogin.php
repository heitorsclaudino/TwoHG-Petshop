<?php
    include_once('./conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT id FROM users WHERE email='$email' AND senha='$senha'";
    
    $response = mysqli_query($conn, $consulta);
    
    $row = mysqli_fetch_assoc($response);
    
    $consultaAdm = "SELECT id  FROM admins WHERE email='$email' AND senha='$senha'";

    $responseAdm = mysqli_query($conn, $consultaAdm);

    $rowAdm = mysqli_fetch_assoc($responseAdm);

    if (isset($row)){
        $_SESSION['tipo'] = 'user';
        $_SESSION['id'] = $row['id'];
        header('Location: ./buscaDadosUser.php');
    } else if (isset($rowAdm)) {
        $_SESSION['tipo'] = 'adm';
        $_SESSION['idAdm'] = $rowAdm['id'];
        header('Location: ./buscaDadosAdm.php');
    } else {
        $_SESSION['erroLog'] = true;
        header('Location: ../login.php');
    }
?>