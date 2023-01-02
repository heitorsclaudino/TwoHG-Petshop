<?php
    include_once('./conexao.php');
    include_once('./validacpf.php');

    $cpfAdm = preg_replace("/[^0-9]/", "", $_POST['cpfAdm']);
    $telAdm = preg_replace("/[^0-9]/", "", $_POST['telAdm']);

    $verifica = "SELECT email FROM admins WHERE email='" . $_POST['emailAdm'] . "'";
    $verificaUsers = "SELECT email FROM users WHERE email='" . $_POST['emailAdm'] . "'";

    $responseVerifica = mysqli_query($conn, $verifica);
    $rowVerifica = mysqli_fetch_assoc($responseVerifica);

    $responseVerificaUsers = mysqli_query($conn, $verificaUsers);
    $rowVerificaUsers = mysqli_fetch_assoc($responseVerificaUsers);

    if(isset($rowVerifica) || isset($rowVerificaUsers)){
        $_SESSION['erroCadastroAdm'] = true;
        header('Location: ../html/cadastraAdm.php');
    } else {
        if (validacpf($cpfAdm)){
            $insert = "INSERT INTO admins (nome, senha, cpf, telefone, email, endereco, cargo)
                        VALUES ('" . $_POST['nomeAdm'] . "', '" . $_POST['senhaAdm'] . "', '" . $cpfAdm . "', '" . $telAdm . "', '" . $_POST['emailAdm'] . "', '" . $_POST['enderecoAdm'] . "', '" . $_POST['cargo'] . "')";

            $response = mysqli_query($conn, $insert);

            header('Location: ../html/admin.php');
        } else {
            $_SESSION['erroCpfAdm'] = true;
            header('Location: ../html/cadastraAdm.php');
        }
    }    
?>