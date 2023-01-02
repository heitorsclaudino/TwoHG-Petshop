<?php
    include_once('../php/conexao.php');
    
    if(isset($_SESSION['id']) || isset($_SESSION['idAdm'])){
        ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Usuário</title>
        
        <!-- Estilos -->
        <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/styleEditaU.css">
        <link rel="stylesheet" href="../css/styleHF.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
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
        <?php
            if($_SESSION['tipo'] == 'adm'){
        ?>
        <a class="linkshomeside" href="../php/buscaDadosAdm.php">Usuário</a>
        <?php
            } else if ($_SESSION['tipo'] == 'user'){
        ?>
        <a class="linkshomeside" href="../php/buscaDadosUser.php">Usuário</a>
        <?php
            }
        ?>
        <a class="linkshomeside" href="../php/logout.php">Log out</a>
    </div>
</header>
<body>
    <section class="container-fluid">
        <div class="row caixa">
            <div class="col menu">
                <div class="info_prof">
                    <h2>Bem-vinde ao TwoHG PetShop!</h2>
                    <div class="cliente">
                        <p><?php echo $_SESSION['usuario']['nome'] ?></p>
                    </div>
                    <div class="botao">
                        <a class="btn btn-outline-dark" href="./editaUser.php">Editar seus dados</a>
                    </div>
                    <hr>
                    <p class="pets">Seus Pets</p>
                    <?php
                        foreach ($_SESSION['animais'] as $row) {
                            echo "<p class='nomeAnimal'>- ". $row['nome'] ."</p>";
                        }
                    ?>
                </div>
            </div>
            <div class="col-10 conteudo">
                <div class="container cont">
                    <section class="row box">
                        <h2 class="Titulo">Editar Usuario</h2>
                        <form action="../php/processaEditaUser.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label label" for="nomeUser">Nome: </label>
                                <input class="form-control" type="text" id="nomeUser" name="nomeUser" required value="<?php echo $_SESSION['usuario']['nome']; ?>">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="senhaUser">Senha: </label>
                                <input class="form-control" type="text" id="senhaUser" name="senhaUser" required value="<?php echo $_SESSION['usuario']['senha']; ?>">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="cpfUser">CPF: </label>
                                <input class="form-control" type="text" id="cpfUser" name="cpfUser" value="<?php echo $_SESSION['usuario']['cpf']; ?>" readonly>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="cnpjUser">CNPJ (opcional): </label>
                                <input class="form-control" type="text" id="cnpjUser" name="cnpjUser" value="<?php echo $_SESSION['usuario']['cnpj']; ?>" readonly>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="telUser">Telefone celular: </label>
                                <input class="form-control" type="text" id="telUser" name="telUser" value="<?php echo $_SESSION['usuario']['telefone']; ?>">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="emailUser">Email: </label>
                                <input class="form-control" type="text" id="emailUser" name="emailUser" value="<?php echo $_SESSION['usuario']['email']; ?>" readonly>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label label" for="enderecoUser">Endereço: </label>
                                <input class="form-control" type="text" id="enderecoUser" name="enderecoUser" value="<?php echo $_SESSION['usuario']['endereco']; ?>">
                            </div>
                            <br>
                            <div style="display: flex; justify-content: space-between;">
                                <button class='btn btn-outline-dark botao' type="submit">Alterar</button>
                            </form>
                            <a href="../php/excluirUser.php" class="class='btn btn-outline-dark botao'">Excluir conta</a>
                        </div>
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
    <script src="../js/excluir.js"></script>
</body>
</html>
<?php
    } else {
        header('Location: ../login.php');
    }
?>