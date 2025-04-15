<?php 
session_start();
include '../functions/sessions.php';
//função que encaminha usuário logado
encaminharLogado($mysqli);
//função que verifica o login
login($mysqli);

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
        <link rel="stylesheet" href="../css/style-portifolio.css">
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
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="../projetos.php">Projetos</a></li>
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="login.php">Login</a></li>
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="../blog.php">Blog<i class="notificacao-blog fa-solid fa-circle fa-2xs" style="color: #f80808;"></i></a></li>
                                </ul>
                            </nav>
                        </section> 
                    </div>
                </div>
            </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
            <main>
                <!--ABERTURA SECTION FORMULÁRIO DE LOGIN-->
                <section id="login">
                    <div class="row d-flex my-5 justify-content-center">
                        <div class="col-11 col-md-6 col-lg-4 border p-4 box-form">
                            <form id="form-login" method='POST'>
                                <div class="text-center">
                                    <h1 class="inter-bold d-inline">Painel</h1>    
                                </div>
                                <div class="form-group my-2">
                                    <label for="username" class="poppins-light cinza">Usuário</label>
                                    <input type="text" name="username" class="form-control">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-usuario'])){ echo $_SESSION['erro-usuario'];}?></small>
                                </div>
                                <div class="form-group my-2">
                                    <label for="senha" class="poppins-light cinza">Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-senha'])){ echo $_SESSION['erro-senha'];}?></small>
                                </div>
                                <button class="btn btn-primary mt-3" name="submit"><span class="poppins-semibold">Login</span></button>
                            </form>
                        </div>
                    </div>
                </section>
                <!--FECHAMENTO SECTION FORMULÁRIO DE LOGIN-->
            </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
            <footer>
                <div class="row d-flex justify-content-center m-0">
                    <div class="col-12 col-md-6 text-center">
                        <small class="poppins-regular cinza">© <?php $ano = date("Y"); echo $ano; ?> Arthur Vieira - Todos os direitos reservados.</small>
                    </div>
                </div>
            </footer>
        <!--FECHAMENTO FOOTER-->
        </div>
    </body>
</html>