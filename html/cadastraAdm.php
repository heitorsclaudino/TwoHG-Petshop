<?php
    include_once('../php/conexao.php');

    if (isset($_SESSION['idAdm'])){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Administrador</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/styleCadastraAdmin.css">
    <link rel="stylesheet" href="../css/styleHF.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<header class="cabecalho">
    <div class="caixahome">
        <a id="texthome" class="linkshome" href="../index.php">
            <img id="logohome" src="../img/logo.png" alt="logo da twohg">
            TwoHG PetShop
        </a>
    </div>
    <div class="caixalinks">
        <a class="linkshomeside" href="../php/buscaDadosAdm.php">Usuário</a>
        <a class="linkshomeside" href="../php/logout.php">Log out</a>
    </div>
</header>
<body>
<section class="container-fluid">
        <div class="row caixa">
            <div class="col menu">
                <div class="info_prof">
                    <h2>Dados do Administrador</h2>
                    <div class="cliente">
                        <p class="row">Nome: <?php echo $_SESSION['adm']['nome']; ?></p>
                        <p class="row">Cargo: <?php echo $_SESSION['adm']['cargo']; ?></p>
                    </div>
                    <div class="botao">
                        <a class="btn btn-outline-dark" href="./editaAdm.php">Editar seus dados</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-10 conteudo">
                <div class="container cont">
                    <section class="row box"> 
                        <h2 class="Titulo">Cadastrar</h2> 
                        <span id="alertaAdm"></span>
                        <?php
                            if(isset($_SESSION['erroCadastroAdm'])){
                                echo "<p>Esse email já está registrado!</p>";
                                unset($_SESSION['erroCadastroAdm']);
                            } else if (isset($_SESSION['erroCpfAdm'])){
                                echo "<p>CPF inválido!</p>";
                                unset($_SESSION['erroCpfAdm']);
                            }
                        ?>
                        <form action="../php/processaCadastroAdm.php" method="POST" class="row">
                            <div class="col">
                                <label class="form-label label" for="nomeAdm">Nome: </label>
                                <input class="form-control" type="text" id="nomeAdm" name="nomeAdm" required>
                                <br>
                                <label class="form-label label" for="senhaAdm">Senha: </label>
                                <input class="form-control" onchange="verificaAdm()" type="password" id="senhaAdm" name="senhaAdm" required>
                                <br>
                                <label class="form-label label" for="conSenhaAdm">Confirmar a senha: </label>
                                <input class="form-control" onchange="verificaAdm()" type="password" id="conSenhaAdm" name="conSenhaAdm" required>
                                <br>
                                <label class="form-label label" for="cpfAdm">CPF: </label>
                                <input class="form-control" type="text" id="cpfAdm" name="cpfAdm" required maxlength="14" minlength="14">
                                <br>
                                <label class="form-label label" for="telAdm">Telefone: </label>
                                <input class="form-control" type="text" id="telAdm" name="telAdm" required maxlength="14" minlength="14">
                                <br>
                            </div>
                            <div class="col">
                                <label class="form-label label" for="emailAdm">Email: </label>
                                <input class="form-control" type="text" id="emailAdm" name="emailAdm" required>
                                <br>
                                <label class="form-label label" for="enderecoAdm">Endereço: </label>
                                <input class="form-control" type="text" id="enderecoAdm" name="enderecoAdm" required>
                                <br>
                                <label class="form-label label" for="cargo">Cargo: </label>
                                <input class="form-control" type="text" id="cargo" name="cargo" required>
                                <br>
                            </div>
                            <button class='btn btn-outline-dark botao' type="submit">Cadastrar</button>
                            <br>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <footer class="rodape">
        <img id="logorodape" src="../img/logo.png" alt="logo da twohg pet">
        <div>
            <p>Copyright &copy; | TwoHG-Petshop | Senai Suíço Brasileiro Paulo Ernesto Tolle | 2022</p>
        </div>
        <img id="logorodape" src="../img/logo.png" alt="logo da twohg pet">
    </footer>
    <script src="../js/caracEspeciais.js"></script>
    <script src="../js/confirmaSenha.js"></script>
</body>
</html>
<?php
    } else {
        header('Location: ../login.php');
    }
?>