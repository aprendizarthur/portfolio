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
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="sobre.php">Arthur</a></li>
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="#">Projeto</a></li>
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
                <!--ABERTURA SECTION PAGINA DE PROJETO-->
                <section id="projeto-pagina">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-7 text-center mt-3 mb-5">
                            <small class="poppins-light cinza">Projeto pessoal</small>
                            <h1 class="h1-cta inter-bold mt-1">Cafeteria Lírio de Ouro</h1> 
                            <p class="poppins-regular preto">Descrição curta do que o projeto se trata e o link para acessar ele</p>
                            
                            <figure>
                                <img class="my-2" src="https://media.istockphoto.com/id/1428594094/pt/foto/empty-coffee-shop-interior-with-wooden-tables-coffee-maker-pastries-and-pendant-lights.jpg?s=612x612&w=0&k=20&c=EIBXad3-s2bibejFi0mXW8pBPFFRI6ZAgdbgcbbl7Pk=" alt="">
                            </figure>

                            <div id="compartilhar-redes" class="mt-3 mb-4">
                                <h3 class="inter-bold">Compartilhar em</h3>
                                <a href=""><i style="color:#395693" class="fa-brands fa-facebook fa-xl mx-2"></i></a>
                                <a href=""><i style="color: #3EBD4E" class="fa-brands fa-whatsapp fa-xl mx-2"></i></a>
                                <a href=""><i style="color: #088CCE" class="fa-brands fa-telegram fa-xl mx-2"></i></a>
                                <a href=""><i style="color: #0E72A3" class="fa-brands fa-linkedin fa-xl mx-2"></i></a>
                                <a href=""><i style="color:#989796" class="fa-regular fa-envelope fa-xl mx-2"></i></a>
                            </div>

                            <details class="mx-auto sumario poppins-regular text-center p-2">
                                <summary><h3 class="d-inline inter-regular">Sumário</h3></summary>
                                <ul class="p-2 mt-2 poppins-regular">
                                    <li class="my-1"><a href="#1">1. Detalhes</a></li>
                                    <li class="my-1"><a href="#2">2. Estrutura</a></li>
                                    <li class="my-1"><a href="#3">3. Funcionalidade</a></li>
                                    <li class="my-1"><a href="#4">4. Plano SEO</a></li>
                                    <li class="my-1"><a href="#5">5. Aprendizados</a></li>
                                    <li class="my-1"><a href="#6">6. Conclusão</a></li>
                                </ul>
                            </details>
                        </div>

                        <div id="1" class="col-11 col-md-7 text-left mb-5">
                            <h2 class="inter-bold preto">1. Detalhes do projeto</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Objetivo do projeto:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Tempo em desenvolvimento:</span> <br> Foi desenvolvido em 2 dias contando desde a prototipagem até a finalzação do código e entrega ao cliente.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Tecnologias utilizadas:</span>
                                <ul>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                    <li class="d-inline poppins-semibold mx-2">Html</li>
                                </ul>
                            </p>
                        </div>

                        <div id="2" class="col-11 col-md-7 text-left mb-5">
                            <h2 class="inter-bold preto">2. Estrutura</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Páginas:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Banco de dados:</span> <br> Foi desenvolvido em 2 dias contando desde a prototipagem até a finalzação do código e entrega ao cliente.
                            </p>

                            <figure>
                                <img class="my-2" src="https://media.istockphoto.com/id/1428594094/pt/foto/empty-coffee-shop-interior-with-wooden-tables-coffee-maker-pastries-and-pendant-lights.jpg?s=612x612&w=0&k=20&c=EIBXad3-s2bibejFi0mXW8pBPFFRI6ZAgdbgcbbl7Pk=" alt="">
                            </figure>
                        </div>

                        <div id="3" class="col-11 col-md-7 text-left mb-5">
                            <h2 class="inter-bold preto">3. Funcionalidades</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Funcionalidade 1:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Funcionalidade 1:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>
                        </div>

                        <div id="4" class="col-11 col-md-7 text-left mb-4">
                            <h2 class="inter-bold preto">4. Plano SEO</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Público-alvo:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <figure>
                                <img class="my-2" src="https://media.istockphoto.com/id/1428594094/pt/foto/empty-coffee-shop-interior-with-wooden-tables-coffee-maker-pastries-and-pendant-lights.jpg?s=612x612&w=0&k=20&c=EIBXad3-s2bibejFi0mXW8pBPFFRI6ZAgdbgcbbl7Pk=" alt="">
                            </figure>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Palavras-chave:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">SEO local:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>
                        </div>

                        <!--ABERTURA SECTION CONTATO-->
                        <section id="contato">
                            <div class="row d-flex justify-content-center align-items-center mb-5">
                                <div class="col-11 col-md-7 bg-preto p-4 d-flex justify-content-center">
                                    <hgroup>
                                        <h1 class="inter-bold branco">Tem algum projeto em mente?</h1>
                                        <h2 class="inter-bold cinza">Entre em contato comigo.</h2>
                                        <a class="mt-2 py-2 btn btn-tertiary" href=""><span class="poppins-semibold">Contato</span></a>    
                                    </hgroup>
                                </div>
                            </div>
                        </section>
                        <!--FECHAMENTO SECTION CONTATO-->

                        <div id="5" class="col-11 col-md-7 text-left mb-5">
                            <h2 class="inter-bold preto">5. Aprendizados</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Aprendizado 1:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Aprendizado 1:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>
                        </div>

                        <div id="6" class="col-11 col-md-7 text-left mb-5">
                            <h2 class="inter-bold preto">6. Conclusão</h2>
                            <hr>

                            <p class="poppins-regular">
                                <span class="poppins-semibold">Aprendizado 1:</span> <br> Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>

                            <p class="poppins-regular">
                                Foi fazer tal e tal para ajudar nisso e naquilo levando a marca da empresa tal ás melhores posições no google.
                            </p>
                        </div>
                    </div>
                </section>
                <!--FECHAMENTO SECTION PAGINA DE PROJETO-->

                <!--ABERTURA SECTION PROJETOS-->
                <section id="projetos">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-7 mb-3 text-left">
                            <h1 class="inter-bold" style="font-size: 1.6rem !important;">Outros projetos</h1> 
                        </div>

                        <div class="col-11 col-md-7 col-lg-7 m-2 p-3 box-projetos">
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

                        <div class="col-11 col-md-7 col-lg-7 m-2 p-3 box-projetos">
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

                        <div class="col-11 col-md-7 mt-2 text-left">
                            <a href="projetos.php" class="poppins-semibold" style="color: #989796;"><u>Ver mais</u></a>
                        </div>
                    </div>
                </section>
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