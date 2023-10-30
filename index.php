<?php
require_once 'classes/PersonalJet.php'; //! Estamos direcionando o programa a requirir a pasta Classe e o Usuarios.php
$u = new Personaliza(); //! Estamos criando uma Usuario
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>WikiFighter</title>
            <link rel="shortcut icon" href="assets/Logo/icone.png" type="image/x-icon">
            <link rel="stylesheet" href="CSS/wikiJetCss.css">
        </head>
        <body>
            <div class="menu-nav">
                <nav class="nav">
                    <img src="assets/Logo/logo.png">
                    <ul>
                        <li><a href="index.php">Pagina Principal</a></li>
                        <li><a href="Navegacao.html">Navegar pelo Site</a></li>
                        <li><a href="Personalisacao_Jet.php">Crie seu Caça</a></li>
                        <li><a href="Quiz/index.html">Quiz</a></li>
                    </ul>
                </nav>
            </div>
            <div class="div_main_pag_prinicp">
                <div class="introducao">
                    <img src="assets/Principal_IMG/principal_img.png" class="principal_imgs">
                    <h1>Proposito</h1>
                    <hr>
                    <p>&nbsp;&nbsp;&nbsp; O WikiFighter é um site dedicado a trazer infomrações simples e algumas especificações
                        de alguns caças atuais, sendo um conteudo simples e não complicado, com  intuido de servir como uma base
                        de entrada para esse mundo, com as paginas contendo conteudos simples e algumas curiosidades, além de uma 
                        tabela de especifcações.
                        Como um atento o site não é dedicada a trazer informações complexas além das especifcações <b>(caso você as considere)</b>
                        sendo que ele é dedicado a servir como algo leve e simples. E não esqueca de visitar o nosso Quiz. 
                    </p>
                </div>
                <div class="introducao_inter_main_pag">
                    <img src="assets/Principal_IMG/conteudo_img.png" class="introducao_fim_img">
                    <h1>Conteudos do WikiFighter</h1>
                    <p>Abaixo veja algusn dos principais conteudos do nosso site</p>
                    <hr>
                </div>
                <div class="conteudos">
                    <ul class="conteudo_ul">
                        <a href="F-22.html" class="conteudo_ul_link">
                            <li class="conteudo_ul_img">
                                <img src="assets/IMG/Conteudo_IMG/F-22_Content.jpg" class="conteudo_img">
                                <p>F-22</p>
                            </li>
                        </a>
                        <a href="F-35.html" class="conteudo_ul_link">
                            <li class="conteudo_ul_img">
                                <img src="assets/IMG/Conteudo_IMG/F-35_Content.jpg" class="conteudo_img">
                                <p>F-35</p>
                            </li>
                        </a>
                        <a href="Su-57.html" class="conteudo_ul_link">
                            <li class="conteudo_ul_img">
                                <img src="assets/IMG/Conteudo_IMG/Su-57_Content.jpg" class="conteudo_img">
                                <p>Su-57</p>
                            </li>
                        </a>
                        <a href="Quiz/index.html" class="conteudo_ul_link">
                            <li class="conteudo_ul_img">
                                <img src="assets/Principal_IMG/Quiz_IMG.png" class="conteudo_img">
                                <p>Quiz</p>
                            </li>
                        </a>
                        <a href="Personalisacao_Jet.php" class="conteudo_ul_link">
                            <li class="conteudo_ul_img">
                                <img src="assets/IMG/Conteudo_IMG/crise_seu_caca.jpg" class="conteudo_img">
                                <p>Crie seu proprio Caça</p>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </body>
    </html>