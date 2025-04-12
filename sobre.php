<?php 
session_start();
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
        <link rel="stylesheet" href="css/style.css">
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
                        <section id="nav" class="mx-auto">
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
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 col-lg-6 my-3 p-2 text-center">
                            <h1 class="h1-cta inter-bold">Oi, eu me chamo Arthur!</h1>
                            <p class="p-cta inter-regular cinza">Curso ciência da computação e sou freelancer desenvolvendo sites para empresas.</p> 
                            <div class="row">
                                <div class="col-12 col-md-6 mb-2">
                                    <a class="py-2 btn btn-primary" href="projetos.php"><span class="poppins-semibold">Projetos</span></a>
                                </div>
                                <div class="col-12 col-md-6">
                                    <a class="py-2 btn btn-secondary" href=""><span class="poppins-semibold"><i class="i-secondary fa-solid fa-download fa-lg me-2"></i>Currículo</span></a>    
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
            <!--FECHAMENTO SECTION CTA-->

        <!--
                <section id="tecnologias">
                    <div class="row d-flex mb-4 justify-content-center">
                        <div class="col-11 col-md-12 my-3 text-center">
                            <h1 class="inter-bold">Tecnologias</h1> 
                        </div>
                        <div class="col-11 col-md-3 col-lg-3 m-2 p-3 box-tecnologias text-left">
                            <h2 class="inter-bold">Frontend</h2>
                            <ul style="margin-left: 10px !important; padding: 0; margin: 0">
                                <li class="poppins-regular my-3">
                                    <i class="fa-brands fa-html5 fa-2xl me-2" style="color: #FFD43B;"></i>HTML
                                </li>
                                <li class="poppins-regular my-3">
                                    <i class="fa-brands fa-css3-alt fa-2xl me-2" style="color: #28A4DF;"></i>CSS
                                </li>
                                <li class="poppins-regular">
                                    <i class="fa-brands fa-bootstrap fa-xl me-2" style="color: #6E3BB9;"></i>Bootstrap
                                </li>
                            </ul>
                        </div>
                        <div class="col-11 col-md-3 col-lg-3 m-2 p-3 box-tecnologias text-left">
                            <h2 class="inter-bold">Backend</h2>
                            <ul style="margin-left: 10px !important; padding: 0; margin: 0">
                                <li class="poppins-regular my-3">
                                    <i class="fa-brands fa-php fa-xl me-2" style="color: #7377AD;"></i>PHP
                                </li>
                                <li class="poppins-regular my-3">
                                    <i class="fa-solid fa-database fa-xl me-2" style="color: #F80808;"></i>SQL
                                </li>
                                <li class="poppins-regular">
                                    <i class="fa-solid fa-database fa-xl me-2" style="color: #08668E;"></i>MySQL
                                </li>
                            </ul>
                        </div>
                        <div class="col-11 col-md-3 col-lg-3 m-2 p-3 box-tecnologias text-left">
                            <h2 class="inter-bold">Outras</h2>
                            <ul style="margin-left: 10px !important; padding: 0; margin: 0">
                                <li class="poppins-regular my-3">
                                    <i class="fa-brands fa-git-alt fa-2xl me-2" style="color: #F15538;"></i>Git
                                </li>
                                <li class="poppins-regular my-3">
                                    <i class="fa-brands fa-figma fa-xl me-2" style="color: #34343B;"></i>Figma
                                </li>
                                <li class="poppins-regular">
                                    <i class="fa-solid fa-magnifying-glass fa-lg me-2" style="color: #272727;"></i>SEO
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            -->
        

            <!--ABERTURA SECTION PROJETOS-->
                <section id="projetos">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-12 my-3 text-center">
                            <h1 class="inter-bold">Projetos</h1> 
                        </div>

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-4 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <img class="imagem-projeto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVztu0_2vSVvMo4v7cdIXFAvZHhWc7y9xAww&s" alt="">
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza">Projeto extensão faculdade</small>
                                            <h2 class="inter-bold">Redamil</h2>    
                                        </header>
                                        
                                        <p class="poppins-regular preto">
                                            Conteúdo gratuito de preparação para redação do ENEM. Teste limite de caracteres. 
                                        </p>

                                        <footer class="d-flex justify-content-between align-items-center">
                                            <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                            <div>
                                                <a class="d-inline btn btn-secondary mx-1 p-2" href=""><i class="fa-brands fa-github fa-xl"></i></a>
                                                <a class="d-inline btn btn-primary mx-1 p-2" href=""><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-4 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <img class="imagem-projeto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVztu0_2vSVvMo4v7cdIXFAvZHhWc7y9xAww&s" alt="">
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza">Projeto extensão faculdade</small>
                                            <h2 class="inter-bold">Redamil</h2>    
                                        </header>
                                        
                                        <p class="poppins-regular preto">
                                            Conteúdo gratuito de preparação para redação do ENEM. Teste limite de caracteres. 
                                        </p>

                                        <footer class="d-flex justify-content-between align-items-center">
                                            <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                            <div>
                                                <a class="d-inline btn btn-secondary mx-1 p-2" href=""><i class="fa-brands fa-github fa-xl"></i></a>
                                                <a class="d-inline btn btn-primary mx-1 p-2" href=""><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            <!--FECHAMENTO SECTION PROJETOS-->
            </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
            <footer>

            </footer>
        <!--FECHAMENTO FOOTER-->
        </div>
    </body>
</html>