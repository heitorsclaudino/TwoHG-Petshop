<?php
    include_once('./conexao.php');
    include_once('./validacpf.php');
    include_once('./validacnpj.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $cpf = preg_replace("/[^0-9]/", "", $cpf);

    $cnpj = $_POST['cnpj'];
    $cnpj = preg_replace("/[^0-9]/", "", $cnpj);

    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $tel = preg_replace("/[^0-9]/", "", $tel);

    $endereco = $_POST['endereco'];

    $consultaUsuario = "SELECT email FROM users WHERE email='" . $email . "'";
    $consultaAdmins = "SELECT email FROM admins WHERE email='" . $email . "'";
    
    $responseConsulta = mysqli_query($conn, $consultaUsuario);
    $rowConsulta = mysqli_fetch_assoc($responseConsulta);

    $responseConsultaAdmins = mysqli_query($conn, $consultaAdmins);
    $rowConsultaAdmins = mysqli_fetch_assoc($responseConsultaAdmins);
    
    if (isset($rowConsulta) || isset($rowConsultaAdmins)){
        $_SESSION['erroCadastro'] = true;
        header('Location: ../cadastro.php');
    } else {
        if($cnpj != ''){
            if(validacpf($cpf) && validacnpj($cnpj)){
                $consulta = "INSERT INTO users (nome, senha, cpf, cnpj, email, telefone, endereco) 
                VALUES ('$nome', '$senha', '$cpf', '$cnpj', '$email', '$tel', '$endereco')";
                
                $response = mysqli_query($conn, $consulta);
                
                if(isset($response)){
                    header('Location: ../login.php');
                } else{
                    $_SESSION['erroReg'] = true;
                    header('Location: ../cadastro.php');
                }
                
            } else {
                $_SESSION['valida'] = true;
                header('Location: ../cadastro.php');
            }
        } else {
            if (validacpf($cpf)){
                $consulta = "INSERT INTO users (nome, senha, cpf, email, telefone, endereco) 
                VALUES ('$nome', '$senha', '$cpf', '$email', '$tel', '$endereco')";
    
                $response = mysqli_query($conn, $consulta);
    
                if(isset($response)){
                    header('Location: ../login.php');
                } else {
                    $_SESSION['erroReg'] = true;
                    header('Location: ../cadastro.php');
                }
            } else {
                $_SESSION['valida'] = true;
                header('Location: ../cadastro.php');
            }
        }
    }
?>