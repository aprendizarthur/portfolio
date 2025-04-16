<?php 
session_start();
include 'functions/conteudo.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Link canonico da página-->
        <link rel="canonical" href=""/>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Título, Ícone, Descrição e Cor de tema p/ navegador -->
        <title>Treino</title>
        <link rel="icon" type="image/x-icon" href="">
        <meta name="description" content="">
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
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="projetos.php">Projetos</a></li>
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="sobre.php">Sobre</a></li>
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
            <!--ABERTURA SECTION CTA-->
                <section id="cta">
                    <div class="row d-flex justify-content-center mt-3 mb-3 text-light">
                        <div class="col-11 col-md-10 col-lg-10 p-4 text-center bg-preto" style="border-radius: 24px;">
                            <h1 class="h1-cta inter-bold d-inline">Oi, eu me chamo Arthur<span class="h1-cta inter-bold p-0 m-0 d-none d-lg-inline"> Vieira</span>!</h1>
                            <p class="p-cta poppins-regular cinza mb-4">Sou freelancer desenvolvendo sites institucionais para empresas.</p> 
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-md-5 col-lg-3 mb-2">
                                    <a class="py-2 btn btn-primary-cta" href="#projetos"><span class="poppins-semibold">Contato</span></a>
                                </div>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <a class="py-2 btn btn-secondary-cta" href=""><span class="poppins-semibold"><i class="i-secondary fa-solid fa-download fa-lg me-2"></i>Currículo</span></a>    
                                </div>
                                <div class="col-12 col-md-12 mt-4">
                                    <section id="redes">
                                        <a href=""><i class="fa-solid fa-envelope fa-xl mx-2"></i></a>
                                        <a href=""><i class="fa-brands fa-github fa-xl mx-2"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin fa-xl mx-2"></i></a>
                                        <a href=""><i class="fa-brands fa-whatsapp fa-xl mx-2"></i></a>
                                    </section>
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
            <!--FECHAMENTO SECTION CTA-->

            <!--FUNÇÃO PHP QUE EXIBE 4 PROJETOS-->
            <?php mostrarProjetos($mysqli);?>

            <!--ABERTURA SECTION CONTATO-->
            <section id="contato">
                <div class="row d-flex mt-5 mb-4 justify-content-center align-items-center">
                    <div class="col-11 col-md-10 bg-preto p-4 d-flex justify-content-center">
                        <hgroup>
                            <h1 class="inter-bold branco">Tem algum projeto em mente?</h1>
                            <h2 class="poppins-semibold cinza">Entre em contato comigo.</h2>
                            <a class="mt-3 py-2 btn btn-tertiary" href=""><span class="poppins-semibold">Contato</span></a>    
                        </hgroup>
                    </div>
                </div>
            </section>
            <!--FECHAMENTO SECTION CONTATO-->

            <!--FUNÇÃO PHP QUE EXIBE 4 POSTAGENS-->
            <?php mostrarPostagens($mysqli);?>

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