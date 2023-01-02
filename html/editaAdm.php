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
    <title>Editar Seus Dados</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/styleEditaAdmin.css">
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
                <div class="container">
                    <section class="row box">
                        <h2 class="Titulo">Editar Conta</h2>
                        <form action="../php/processaEditaAdm.php" method="POST" class="row">
                            <div class="col">
                                <label class="form-label label" for="nomeAdm">Nome: </label>
                                <input class="form-control" type="text" id="nomeAdm" name="nomeAdm" required value="<?php echo $_SESSION['adm']['nome'] ?>">
                                <br>
                                <label class="form-label label" for="senhaAdm">Senha: </label>
                                <input class="form-control" type="text" id="senhaAdm" name="senhaAdm" required value="<?php echo $_SESSION['adm']['senha'] ?>">
                                <br>
                                <label class="form-label label" for="cpfAdm">CPF: </label>
                                <input class="form-control" type="text" id="cpfAdm" name="cpfAdm" required value="<?php echo $_SESSION['adm']['cpf'] ?>" readonly>
                                <br>
                                <label class="form-label label" for="telAdm">Telefone: </label>
                                <input class="form-control" type="text" id="telAdm" name="telAdm" required value="<?php echo $_SESSION['adm']['telefone'] ?>">
                                <br>
                            </div>
                            <div class="col">

                                <label class="form-label label" for="emailAdm">Email:</label>
                                <input class="form-control" type="text" id="emailAdm" name="emailAdm" required value="<?php echo $_SESSION['adm']['email'] ?>" readonly>
                                <br>
                                <label class="form-label label" for="enderecoAdm">Endereço: </label>
                                <input class="form-control" type="text" id="enderecoAdm" name="enderecoAdm" required value="<?php echo $_SESSION['adm']['endereco'] ?>">
                                <br>
                                <label class="form-label label" for="cargo">Cargo: </label>
                                <input class="form-control" type="text" id="cargo" name="cargo" required value="<?php echo $_SESSION['adm']['cargo'] ?>">
                                <br>
                            </div>
                            <div style="display: flex; justify-content: space-between;">

                                <button class='btn btn-outline-dark botao' type="submit">Alterar</button>
                            </form>
                            <button class='btn btn-outline-dark botao' onclick="pergAdm()">Excluir conta</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyright &copy; | TwoHG-Petshop | Senai Suíço Brasileiro Paulo Ernesto Tolle | 2022</p>
    </footer>
    <script src="../js/excluirAdm.js"></script>
</body>
</html>
<?php
    } else {
        header('Location: ../login.php');
    }
?>