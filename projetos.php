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
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="projetos.php">Projetos</a></li>
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="sobre.php">Sobre</a></li>
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
                <!--ABERTURA SECTION PESQUISA-->
                <section id="pesquisa">
                    <div class="row d-flex justify-content-center text-center my-3">
                        <div class="col-11 col-md-6">
                            <h1 class="h1-cta inter-bold">Pesquise projetos</h1>
                            <p class="p-cta poppins-regular preto">Pesquise por conteúdo ou linguagem de programação.</p>

                            <form method="POST" id="form-pesquisa">
                                <div class="form-group d-inline">
                                    <input class="input-pesquisa form-control poppins-regular cinza" type="text" name="pesquisa" placeholder="">
                                </div>

                                <button class="btn btn-primary" type="submit d-inline"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
                            </form>
                        </div>
                    </div>
                </section>
                <!--FECHAMENTO SECTION PESQUISA-->

                <!--ABERTURA SECTION PROJETOS-->
                <section id="projetos">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 mt-4 text-left">
                            <h1 class="inter-bold">Recentes</h1>
                            <hr> 
                        </div>

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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


                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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


                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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

                <!--ABERTURA SECTION PROJETOS-->
                <section id="projetos">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 mt-4 text-left">
                            <h1 class="inter-bold">Mais vistos</h1>
                            <hr> 
                        </div>

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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

                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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


                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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


                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="">
                                            <img class="imagem-projeto" src="https://i0.wp.com/assets.b9.com.br/wp-content/uploads/2021/05/nubankb9.jpg?fit=1280%2C720&ssl=1" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">Projeto extensão faculdade</small>
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

                <!--ABERTURA SECTION CONTATO-->
                <section id="contato">
                        <div class="row d-flex justify-content-center align-items-center my-5">
                            <div class="col-11 col-md-10 bg-preto p-4 d-flex justify-content-center">
                                <hgroup>
                                    <h1 class="inter-bold branco">Tem algum projeto em mente?</h1>
                                    <h2 class="inter-bold cinza">Entre em contato comigo.</h2>
                                    <a class="mt-2 py-2 btn btn-tertiary" href=""><span class="poppins-semibold">Contato</span></a>    
                                </hgroup>
                            </div>
                        </div>
                    </section>
                <!--FECHAMENTO SECTION CONTATO-->

            </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
        <footer>
            <div class="row d-flex justify-content-center mt-4">
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