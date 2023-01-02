<?php
    include_once('./php/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwoHG PetShop | Home</title>

    <!-- Estilos -->
    <link rel="shortcut icon" href="./img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/stylehome.css">
    <link rel="stylesheet" href="./css/styleslider.css">
    <link rel="stylesheet" href="./css/styleHF.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
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
<body style="height:fit-content; width:fit-content;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
             
        <section class="corpo">
            <div class="caixaslider col-7">
                <h1><p>TwoHG</p>, o melhor lugar para o seu Pet!</h1>
                <!-- Slider -->
                <div class="slider">
                    <div class="slides">
                        <!-- Radio Buttons -->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!-- Fim Radio Buttons -->
                        <!-- Slide images -->
                        <div class="slide first">
                            <img src="https://www.acontecenors.com.br/images/noticias/59464/3fed091e79ecab88cf728ab4d7c24c1e.jpg" alt="Imagem 1" />
                        </div>
                        <div class="slide">
                            <img src="https://img.freepik.com/free-vector/cute-pets-illustration_53876-112522.jpg?w=2000" alt="Imagem 2" />
                        </div>
                        <div class="slide">
                            <img src="https://www.guardiancondo.com.br/blog/wp-content/uploads/sites/2/2021/04/Guardian-Condo-Banner-Blog-Pets.png" alt="Imagem 3" />
                        </div>
                        <div class="slide">
                            <img src="https://img.freepik.com/free-vector/group-different-cute-pets_52683-37216.jpg?w=2000" alt="Imagem 4" />
                        </div>
                        <!-- Fim Slide images -->
                        <!-- Navigation auto -->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
            </div>
            <!-- Fim do Slider -->
            <div class="row">
                <div class="col">
                    <div class="caixaservicos col-7">
                        <h2>Serviços</h2>
                            <div class="servicos row">
                                <div class="servico col-3">
                                    <h3>Banho e Tosa</h3>
                                    <img src="https://img.freepik.com/vetores-premium/banho-de-tosa-de-caes-adoravel-animal-de-estimacao-lavagem-de-animais-de-estimacao_647138-1.jpg?w=2000" alt="imagem de lavagem de animal">
                                    <p>Um banho gostoso para o seu animal com direito a uma tosa.</p>
                                </div>
                                <div class="servico col-3">   
                                    <h3>Veterinário</h3>
                                    <img src="https://img.freepik.com/vetores-gratis/veterinario-com-muitos-tipos-de-animais_1308-65733.jpg?w=2000" alt="imagem de veterinário">
                                    <p>Fazemos exames, cirurgias e o que for necessario pelo seu pet.</p>
                                </div>
                                <div class="servico col-3">
                                    <h3>Hospedagem</h3>
                                    <img src="https://petcaring.com.br/public/uploads/produtos/produtos_39f530175.jpg" alt="imagem de hospedagem de animais">
                                    <p>Ensinaremos truques, massagem, brincadeiras, petiscos, banho, e tudo mais.</p>
                                </div>
                            </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="caixasobre col-7" style="height:fit-content; width:fit-content; border-radius: 0 0 20px 20px;">
                        <h2>Sobre os Membros</h2>
                        <div class="caixateam col-10">
                            <div class="membro row">
                                <div class="fotonome col-4">
                                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/4819322-avatar-feminino-mulher-perfil-icone-para-rede-vetor.jpg" alt="">
                                    <h4>Giovanna Paiva</h4>
                                </div>
                                <div class="caixatextosobre col">
                                    <p>Estudante de ensino médio e técnico, com curso no SENAI, desenvolvedora, tendo preferencias na parte de front-end e BCD, porem com conhecimentos em back-end e pronta para aprender sempre mais</p>
                                </div>
                            </div>
                            <div class="membro row">
                                <div class="fotonome col-4">
                                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/2275847-avatar-masculino-perfil-icone-de-homem-caucasiano-sorridente-vetor.jpg" alt="">
                                    <h4>Guilherme Leoni</h4>
                                </div>
                                <div class="caixatextosobre col">
                                    <p>Olá tenho 16 anos, sou estudante do Senai-SP e busco trabalhar como desenvolvedor no futuro.Álias eu adoraria trazer meu dog aqui um dia!</p>
                                </div>
                            </div>
                            <div class="membro row">
                                <div class="fotonome col-4">
                                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/2275847-avatar-masculino-perfil-icone-de-homem-caucasiano-sorridente-vetor.jpg" alt="">
                                    <h4>Heitor</h4>
                                </div>
                                <div class="caixatextosobre col">
                                    <p>Olá, tenho 18 anos, e estou na área de desenvolvimento há quase um ano. Com certeza levaria minha pet nesta clínica.</p>
                                </div>
                            </div>
                            <div class="membro row">
                                <div class="fotonome col-4">
                                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/2275847-avatar-masculino-perfil-icone-de-homem-caucasiano-sorridente-vetor.jpg" alt="">
                                    <h4>Henrique Botelho</h4>
                                </div>
                                <div class="caixatextosobre col">
                                    <p>Estudante de desenvolvimento de sistemas, gosta de programar e desenvolver novas habilidades tanto no front-end, quanto no back-end e em data science.</p>
                                </div>
                            </div>
                        </div>'
                    </div>
            </div>
        </section>
        <div class="row">
            <div class="col">
                </div>
            </div> 
        </div>
        <script src="./js/slider.js"></script>
    </body>
    <footer class="rodape">
        <img id="logorodape" src="./img/logo.png" alt="logo da twohg pet">
            <div>
                <p>Copyright &copy; | TwoHG-Petshop | Senai Suíço Brasileiro Paulo Ernesto Tolle | 2022</p>
            </div>
        <img id="logorodape" src="./img/logo.png" alt="logo da twohg pet">
    </footer> 
</html>