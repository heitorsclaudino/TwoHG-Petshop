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
    <title>Novo Agendamento</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/styleUsuario.css">
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
                        <h2 class="Titulo">Agendamento</h2>
                        <?php
                            if(isset($_SESSION['erroAgenda'])){
                                echo "<p>Data/Horário indisponível!</p>";
                                unset($_SESSION['erroAgenda']);
                            }
                        ?>
                        <form action="../php/processaCadastroAgenda.php" method="POST">
                            <select class="form-select form-select-sm mb-3" name="nomeAnimal" id="nomeAnimal">
                                <?php
                                    foreach($_SESSION['animais'] as $row){
                                        echo "<option value='". $row['nome'] ."'>". $row['nome'] ."</option>";
                                    }
                                ?>
                            </select>
                            <br>
                            <label class="form-label" for="servico">Serviço</label>
                            <select class="form-select form-select-sm mb-3" name="servico" id="servico" required>
                                <option value="banho e tosa">Banho e Tosa</option>
                                <option value="veterinario">Veterinário</option>
                                <option value="hospedagem">Hospedagem</option>
                            </select>
                            <br>
                            <label class="form-label" for="data">Data</label>
                            <input class="form-control" type="date" id="data" name="data" required>
                            <br>
                            <label class="form-label" for="hora">Hora:</label>
                            <select class="form-select form-select-sm mb-3" name="hora" id="hora" required>
                                <option value="10h">10h</option>
                                <option value="14h">14h</option>
                                <option value="19h">19h</option>
                            </select>
                            <br>
                            <div class="botao">
                                <button class='btn btn-outline-dark' type="submit">Criar agendamento</button>
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