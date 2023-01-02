<?php
    include_once('./php/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Estilos -->
    <link rel="shortcut icon" href="./img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="./css/styleHF.css">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<body>
    <div class="page">
        <header class="cabecalho">
            <div class="caixahome">
                <a id="texthome" class="linkshome" href="./index.php">
                    <img id="logohome" src="./img/logo.png" alt="logo da twohg">
                    TwoHG PetShop
                </a>
            </div>
            <div class="caixalinks">
                <?php
                    if (isset($_SESSION['id'])){
                ?>
                <a class="linkshomeside" href="./html/usuario.php">Usuário</a>
                <a class="linkshomeside" href="./php/logout.php">Log out</a>

                <?php    
                    } else if (isset($_SESSION['idAdm'])) {
                ?>

                <a class="linkshomeside" href="./php/buscaDadosAdm.php">Usuário</a>
                <a class="linkshomeside" href="./php/logout.php">Log out</a>

                <?php
                    } else {
                ?>
                <a class="linkshomeside" href="./login.php">Login</a>
                <a class="linkshomeside" href="./cadastro.php">Cadastro</a>

                <?php
                    }
                ?>
            </div>
        </header>
        <section class="corpo">
        <div class="conteudo">
            <h1 class="login">Login</h1>
            <?php
                if(isset($_SESSION['erroLog'])){
                    echo"Dados incorretos! Verifique os dados!";
                    unset($_SESSION['erroLog']);
                }
            ?>
            <form action="./php/processaLogin.php" method="POST" class="forms">
                <div class="formulario">
                    <div class="user-box" for="email">
                        <input type="email" id="email" name="email" alt="Digite seu email aqui" class="input" placeholder="usuario@email.com " required  autofocus>
                    </div>
                    <br>
                    <div class="user-box" for="senha">
                        <input type="password" id="senha" name="senha" alt="Digite seu senha aqui" class="input" placeholder="••••••• " required>
                    </div>
                    <br>
                    <div class="botoes">
                        <button type="submit" class="btnlogin"><div class="loginbtn">Login</div></button>
                    </form>
                    <a class="acad" href="./cadastro.php">Não tem um cadastro?</a>
                </div>
            </div>
        </div>
        </section>
    </div>
    <footer class="rodape">
        <img id="logorodape" src="./img/logo.png" alt="logo da twohg pet">
        <div>
            <p>Copyright &copy; | TwoHG-Petshop | Senai Suíço Brasileiro Paulo Ernesto Tolle | 2022</p>
        </div>
        <img id="logorodape" src="./img/logo.png" alt="logo da twohg pet">
    </footer> 
</body>
</html>