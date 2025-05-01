<?php 
session_start();
include 'functions/conteudo.php';
include 'functions/sessions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Link canonico da página-->
        <link rel="canonical" href="https://developerarthurvieira.com.br">
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Título, Ícone, Descrição e Cor de tema p/ navegador -->
        <title>Arthur Vieira - Sites e Conteúdo para o seu Negócio!</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <meta name="description" content="Confira o meu portfólio: Sites institucionais, conteúdo para mídias sociais e SEO para alavancar seu negócio. Veja os projetos!">
        <meta name="theme-color" content="#FFFFFF">
        <!-- Link CSS -->
        <link rel="stylesheet" href="css/style-portifolio.css">
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--FONTAWESOME JS-->
        <script src="https://kit.fontawesome.com/6afdaad939.js" crossorigin="anonymous">      </script>
        <!-- Fontes Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container my-4">
        <!--ABERTURA HEADER-->
            <header>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <section id="nav-principal" class="mx-auto">
                            <nav>
                                <ul>
                                    <?php atalhoPainel(); ?>
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="projetos.php">Projetos</a></li>
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="index.php">Sobre</a></li>
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="blog.php">Blog<i class="notificacao-blog fa-solid fa-circle fa-2xs" style="color: #f80808;"></i></a></li>
                                </ul>
                            </nav>
                        </section> 
                    </div>
                </div>
            </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
            <main>
     <!-- SEÇÃO PÁGINA DE PROJETO -->
<section id="projeto-pagina">
    <div class="row d-flex justify-content-center">
        <div class="col-11 col-md-7 text-center mt-3 mb-5">
            <small class="poppins-light cinza">Projeto Pessoal</small>
            <h1 class="h1-cta inter-bold mt-1">Portfólio</h1>
            <p class="poppins-regular preto">
                Meu portfólio pessoal, uma plataforma dinâmica que exibe projetos e postagens de blog, com gerenciamento de conteúdo, barra de pesquisa e painel administrativo.
            </p>

            <figure>
                <img class="my-2" src="images/assets/sobre.jpg" alt="Imagem da página sobre do Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>

            <details class="mx-auto sumario poppins-regular text-center p-2">
                <summary><h3 class="d-inline inter-regular">Sumário</h3></summary>
                <ul class="p-2 mt-2 poppins-regular">
                    <li class="my-1"><a href="#1">1. Detalhes</a></li>
                    <li class="my-1"><a href="#2">2. Estrutura</a></li>
                    <li class="my-1"><a href="#3">3. Conclusão</a></li>
                </ul>
            </details>
        </div>

        <div id="1" class="col-11 col-md-7 text-left mb-5">
            <h2 class="inter-bold preto">1. Detalhes</h2>
            <hr>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Objetivo:</span>
                Criar uma plataforma web para exibir meu portfólio de projetos e postagens de blog, com gerenciamento dinâmico de conteúdo, barra de pesquisa e painel administrativo para monitoramento de dados.
            </p>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Status:</span>
                Em desenvolvimento
            </p>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Tempo em Desenvolvimento:</span>
                Aproximadamente 4 dias, incluindo prototipagem.
            </p>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Tecnologias Utilizadas:</span>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-brands fa-figma fa-lg me-2" style="color: #F24E1E;"></i>Figma</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-brands fa-html5 fa-lg me-2" style="color: #E34F26;"></i>HTML</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-brands fa-css3-alt fa-lg me-2" style="color: #1572B6;"></i>CSS</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-brands fa-bootstrap fa-lg me-2" style="color: rgb(208, 36, 231);"></i>Bootstrap 5</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-brands fa-php fa-lg me-2" style="color: #777BB4;"></i>PHP</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-solid fa-database fa-lg me-2" style="color: #4479A1;"></i>phpMyAdmin</span><br>
                <span class="d-inline poppins-semibold mx-2"><i class="fa-solid fa-database fa-lg me-2" style="color: #4479A1;"></i>SQL</span><br>
            </p>
        </div>

        <div id="2" class="col-11 col-md-7 text-left mb-5">
            <h2 class="inter-bold preto">2. Estrutura</h2>
            <hr>

            <p class="poppins-regular">
                O portfólio foi projetado para ser uma vitrine dinâmica dos meus projetos e postagens de blog, com um sistema backend para gerenciamento de conteúdo e uma interface responsiva. Abaixo, destaco as principais funcionalidades e seções:
                <br><br>
                <span class="poppins-semibold d-block">Exibição de Conteúdo:</span>
                Apresenta projetos e postagens de blog de forma dinâmica, recuperando conteúdo pelo ID via GET na página <code>conteudo.php</code>, com contagem de visualizações e sugestões de duas outras postagens.
            </p>

            <figure>
                <img class="my-2" src="images/assets/conteudo.jpg" alt="Imagem da página de conteúdo do Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Barra de Pesquisa:</span>
                Permite aos visitantes buscar projetos e postagens do blog, exibindo resultados relevantes com base nos termos pesquisados.
            </p>

            <figure>
                <img class="my-2" src="images/assets/projetos.jpg" alt="Imagem da página de projetos do Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>

            <figure>
                <img class="my-2" src="images/assets/postagens.jpg" alt="Imagem da página de postagens do Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>

            <p class="poppins-regular">
                <span class="poppins-semibold d-block">Painel de Gerenciamento:</span>
                Oferece uma interface administrativa para adicionar conteúdo via formulário e visualizar dados, como quantidade de projetos, postagens e total de visualizações.
            </p>

            <figure>
                <img class="my-2" src="images/assets/dados.jpg" alt="Imagem do painel de gerenciamento do Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>

            <figure>
                <img class="my-2" src="images/assets/adicionar.jpg" alt="Imagem da adição de conteúdo no Portfólio" style="border-radius: 20px; max-width: 80%; height: auto;">
            </figure>
        </div>

        <!-- SEÇÃO CONTATO -->
        <section id="contato">
            <div class="row d-flex justify-content-center align-items-center mb-5">
                <div class="col-11 col-md-7 bg-preto p-4 d-flex justify-content-center">
                    <hgroup>
                        <h1 class="inter-bold branco">Tem um projeto em mente?</h1>
                        <h2 class="inter-bold cinza">Fale comigo!</h2>
                        <a class="mt-2 py-2 btn btn-tertiary" href="https://wa.me/5553991625511"><span class="poppins-semibold">Entrar em Contato</span></a>
                    </hgroup>
                </div>
            </div>
        </section>
        <!-- FIM SEÇÃO CONTATO -->

        <div id="3" class="col-11 col-md-7 text-left mb-5">
            <h2 class="inter-bold preto">3. Conclusão</h2>
            <hr>

            <p class="poppins-regular">
                O desenvolvimento do meu portfólio tem sido uma experiência enriquecedora, permitindo-me integrar minhas habilidades fullstack em uma plataforma funcional e dinâmica. Em apenas 4 dias, construí um sistema que exibe conteúdo de forma eficiente, com um painel administrativo e barra de pesquisa, utilizando PHP, SQL e Bootstrap 5. <br><br>
                Durante o projeto, aprendi a gerenciar conteúdo dinamicamente e a implementar funcionalidades interativas, como contagem de visualizações e sugestões de postagens. Como melhorias futuras, planejo adotar prepared statements para maior segurança contra SQL Injection, implementar URLs amigáveis com slugs e criar uma interface mais intuitiva para edição de conteúdo, semelhante a um editor de texto rico. <br><br>
                Este projeto é um reflexo do meu crescimento como desenvolvedor e continuará evoluindo para melhor representar meu trabalho e habilidades.
            </p>
        </div>
    </div>
</section>
<!-- FIM SEÇÃO PÁGINA DE PROJETO -->
            </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
            <footer>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-12 col-md-6 text-center">
                        <a class="btn btn-primary mb-2 py-2" href="#nav-principal"> <i class="fa-solid fa-circle-arrow-up fa-lg me-3"></i><span class="poppins-semibold">Voltar para o topo</span></a>
                        <small class="poppins-regular cinza">© <?php $ano = date("Y"); echo $ano; ?> Arthur Vieira - Todos os direitos reservados.</small>
                    </div>
                </div>
            </footer>
        <!--FECHAMENTO FOOTER-->
        </div>
    </body>
</html>