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
    <title>Sua Página</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/styleAdmin.css">
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
                        <div class="row">
                            <a class="btn btn-outline-dark botao" href="./cadastraAdm.php">Cadastrar novo administrador</a>
                        </div>
                    </section>
                    <section class="row box">
                        <h2 class="Titulo">Procurar Cliente</h2>
                        <?php
                            if(isset($_SESSION['erroPesquisa'])){
                                echo "<p>Usuário não encontrado!</p>";
                                unset($_SESSION['erroPesquisa']);
                            }
                        ?>
                        <div>
                            <?php
                                if(isset($_SESSION['erroBusca'])){
                                    echo "<p>Esse email não está cadastrado!</p>";
                                    unset($_SESSION['erroBusca']);
                                }
                            ?>
                            <form action="../php/buscaUser.php" method="POST">
                                <div style="display: flex; margin: 10px; height: fit-content; background-color: #e3e3e3; border:1px solid #e4e4e4; border-radius:5px; text-align: center; padding: 3px;">
                                    <label class="form-label" for="emailUsuario">Email: </label>
                                    <input class="form-control" type="text" id="emailUsuario" name="emailUsuario">
                                    <button class='btn btn-outline-dark botao' type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
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
</body>
</html>
<?php
    } else {
        header('Location: ../login.php');
    }
?>