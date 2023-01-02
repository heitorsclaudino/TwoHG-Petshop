<?php
    include_once('./php/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Estilos -->
    <link rel="shortcut icon" href="./img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/styleCadastro.css">
    <link rel="stylesheet" href="./css/styleHF.css">
    
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
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
            <div class="containerCadastro">
                <h1 class="titulo">Cadastro</h1>
                <?php 
                    if(isset($_SESSION['valida'])){
                        echo "CPF ou CNPJ inválido!";
                        unset($_SESSION['valida']);
                    } else if (isset($_SESSION['erroReg'])){
                        echo "Erro no registro.";
                        unset($_SESSION['erroReg']);
                    }
                ?>
                <span id="alerta"></span>
                <?php
                    if(isset($_SESSION['erroCadastro'])){
                        echo "<p>Esse email já está cadastrado!</p>";
                        unset($_SESSION['erroCadastro']);
                    }
                ?>
                <form action="./php/processaCadastro.php" method="POST" class="form">
                    <div class="boxes">
                        <div class="esquerda">
                            <div class="cad-box">
                                <label for="nome">
                                    Nome completo:
                                </label>
                                <br>
                                <input class="user-box" type="text" id="nome" name="nome" required autofocus>
                            </div>
                            <div class="cad-box">
                                <label for="senha">
                                    Senha:
                                </label>
                                <br>
                                <input class="user-box" onchange="verifica()" type="password" id="senha" name="senha" required>
                            </div>
                            <div class="cad-box">
                                <label for="conSenha">
                                    Confirmar senha:
                                </label>
                                <br>
                                <input class="user-box" onchange="verifica()" type="password" id="conSenha" name="conSenha" required>
                            </div>
                            <div class="cad-box">
                                <label for="email">
                                    Email:
                                </label>
                                <br>
                                <input class="user-box" type="text" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="direita">
                            <div class="cad-box">
                                <label for="cpf">
                                    CPF:
                                </label>
                                <br>
                                <input class="user-box" type="text" id="cpf" name="cpf" required maxlength="14" minlength="14">
                            </div>
                            <div class="cad-box">
                                <label for="cnpj">
                                    CNPJ(opcional):
                                </label>
                                <br>
                                <input class="user-box" type="text" id="cnpj" name="cnpj" maxlength="18" minlength="18">
                            </div>    
                            
                            <div class="cad-box">
                                <label for="tel">
                                    Telefone Celular:
                                </label>
                                <br>
                                <input class="user-box" type="text" id="tel" name="tel" required maxlength="14" minlength="14">
                            </div>
                            <div class="cad-box">
                                <label for="endereco">
                                    Endereço:
                                </label>
                                <br>
                                <input class="user-box" type="text" id="endereco" name="endereco" required>
                            </div>
                        </div>
                    </div>
                    <div class="botoes">
                        <button type="submit" class="btncad">Cadastrar</button>
                    </form>
                    <a class="alogin" href="./login.php">Já tem um cadastro?</a>
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

    <script src="./js/caracEspeciaisUser.js"></script>
    <script src="./js/confirmaSenha.js"></script>
</body>
</html>