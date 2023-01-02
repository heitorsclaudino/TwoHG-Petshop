<?php
    include_once('../php/conexao.php');

    if (isset($_SESSION['id']) || isset($_SESSION['idAdm'])){
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_SESSION['usuario']['nome'] ?></title>

        <!-- Estilos -->
        <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/styleUsuario.css">
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
                            <h2 class="Titulo">Seus Animais</h2>
                            <div class="container ">
                                <div class="row head">
                                    <div class="col">Tipo</div>
                                    <div class="col">Animal</div>
                                    <div class="col">Idade</div>
                                    <div class="col">Observações</div>
                                    <div class="col"></div>
                                </div>
                                <div class="row body">
                                    <?php
                                        if(isset($_SESSION['animais'][0])){
                                            foreach ($_SESSION['animais'] as $row) {
                                                echo "<div class='row'>";
                                                echo "<p class='col'>". $row['animal'] ."</p>";
                                                echo "<p class='col'>". $row['nome'] ."</p>";
                                                echo "<p class='col'>". $row['idade'] ." anos</p>";
                                                echo "<p class='col'>". $row['obs'] ."</p>";
                                                echo "<a class='btn btn-outline-dark col botao' href='../php/buscaDadosAnimal.php?id=". $row['id'] . "'>Editar Animal</a>";
                                                echo "</div>";
                                            }
                                            echo "<div class='botao'>";
                                            echo "<br><a class='btn btn-outline-dark botao' href='./cadastraAnimal.php'>Novo animal</a>";
                                            echo "</div>";
                                        } else {
                                    ?>
                                </div>
                                <div class="botao">
                                    <a class='btn btn-outline-dark botao' href="./cadastraAnimal.php">Adicionar um Animal</a>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </section>
                        <section class="row box">
                            <?php
                                if(isset($_SESSION['agendas'][0]) && isset($_SESSION['animais'][0])){
                            ?>
                            <h2 class="Titulo">Seus Agendamentos</h2>
                            <div class="agendamento">
                                <div class="agendar">
                                    <div class="row head">
                                        <div class="col">Animal</div>
                                        <div class="col">Serviço</div>
                                        <div class="col">Data e Hora</div>                        
                                        <div class="col"></div>
                                    </div>
                                    <div class="row body">
                                        <?php
                                            foreach ($_SESSION['agendas'] as $row) {
                                                echo "<div class='row'>";
                                                echo "<p class='col'>". $row['nome_animal'] ."</p>";
                                                echo "<p class='col'>". $row['servico'] ."</p>";
                                                echo "<p class='col'>". $row['data_hora'] ."</p>";
                                                echo "<a class='btn btn-outline-dark col botao' href='../php/excluirAgenda.php?id=" . $row['id'] . "'>Excluir Agendamento</a>";
                                                echo "</div>";
                                            }
                                            echo "<div class='botao'>";
                                            echo "<br><a class='btn btn-outline-dark botao' href='./cadastraAgenda.php'>Novo Agendamento</a>";
                                            echo "</div>";
                                            } else if (isset($_SESSION['animais'][0])) {
                                        ?>
                                        <a class="btn btn-outline-dark botao" href="./cadastraAgenda.php">Adicionar um Agendamento</a>
                                        <?php
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <script src="../js/voltar3.js"></script>
    </body>
    <footer class="rodape">
        <img id="logorodape" src="../img/logo.png" alt="logo da twohg pet">
        <div>
            <p>Copyright &copy; | TwoHG-Petshop | Senai Suíço Brasileiro Paulo Ernesto Tolle | 2022</p>
        </div>
        <img id="logorodape" src="../img/logo.png" alt="logo da twohg pet">
    </footer>
</html>

<?php
    } else {
        header('Location: ../login.php');
    }
?>