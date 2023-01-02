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
    <title>Editar Animal</title>

    <!-- Estilos -->
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styleEditaA.css">
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
                    <h2 class="Titulo">Editar Animal</h2>
                    <form action="../php/processaEditaAnimal.php" method="POST">
                        <label class="form-label label" for="nomeAnimal">Nome: </label>
                        <input class="form-control" type="text" id="nomeAnimal" name="nomeAnimal" required value="<?php echo $_SESSION['nome_animal']; ?>">
                        <br>
                        <label class="form-label label" for="idade">Idade: </label>
                        <input class="form-control" type="number" id="idade" name="idade" required value="<?php echo $_SESSION['idade_animal']; ?>">
                        <br>
                        <label class="form-label label" for="porte">Porte: </label>
                        <select class="form-select form-select-sm mb-3" name="porte" id="porte" required>
                            <option value="pequeno" <?php if($_SESSION['porte_animal'] == "pequeno"){ echo "selected"; }?>>Pequeno</option>
                            <option value="medio" <?php if($_SESSION['porte_animal'] == "medio"){ echo "selected"; }?>>Médio</option>
                            <option value="grande" <?php if($_SESSION['porte_animal'] == "grande"){ echo "selected"; }?>>Grande</option>
                        </select>
                        <br>
                        <label class="form-label label" for="raca">Raça: </label>
                        <input class="form-control" type="text" id="raca" name="raca" value="<?php echo $_SESSION['raca_animal']; ?>">
                        <br>
                        <div class="form-floating">
                            <textarea id="floatingTextarea" class="form-control" style="resize: none;" name="obs" cols="30" rows="10"><?php echo $_SESSION['obs_animal']; ?></textarea>
                            <label for="floatingTextarea">Observações:</label>
                        </div>
                        <br>
                        <div style="display: flex; justify-content: space-between;">
                            <button class='btn btn-outline-dark botao' type="submit">Alterar</button>
                        </form>
                        <a href="../php/excluirAnimal.php?nomeAnimal='<?php echo $_SESSION['nome_animal'] ?>'">Excluir animal</a>
                    </div>
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