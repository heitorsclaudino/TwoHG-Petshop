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
    <title>Novo Animal</title>

    <!-- Estilos -->
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styleCadastroA.css">
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
                <div class="container">
                    <section class="row box">
                        <h2 class="Titulo">Cadastrar Animal</h2>
                        <form action="../php/processaCadastroAnimal.php" method="POST">
                            <label class="form-label" for="animal">Animal: </label>
                            <select class="form-select form-select-sm mb-3" name="animal" id="animal" required>
                                <option value="cachorro">Cachorro</option>
                                <option value="gato">Gato</option>
                                <option value="papagaio">Papagaio</option>
                                <option value="hamster">Hamster</option>
                                <option value="coelho">Coelho</option>
                                <option value="passarinho">Passarinho</option>
                            </select>
                            <br>
                            <div class="mb-3">
                                <label class="form-label" for="nomeAnimal">Nome: </label>
                                <input type="text" class="form-control" id="nomeAnimal" name="nomeAnimal" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label" for="idade">Idade: </label>
                                <input placeholder="anos" class="form-control" type="number" id="idade" name="idade" required>
                            </div>
                            <br>
                            <label class="form-label" for="porte">Porte: </label>
                            <select class="form-select form-select-sm mb-3" name="porte" id="porte" required>
                                <option value="pequeno">Pequeno</option>
                                <option value="medio">Médio</option>
                                <option value="grande">Grande</option>
                            </select>
                            <br>
                            <div class="mb-3">
                                <label class="form-label" for="raca">Raça: </label>
                                <input type="text" class="form-control" id="raca" name="raca">
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" maxlength="255" style="resize: none;" name="obs" cols="30" rows="10" placeholder="Observação:" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Observações:</label>
                            </div>
                            <br>
                            <div class="botao">
                                <button class='btn btn-outline-dark' type="submit">Cadastrar</button>
                            </div>
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
</body>
</html>
<?php
    } else {
        header('Location: ../login.php');
    }
?>