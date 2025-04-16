<?php 
session_start();
include '../functions/sessions.php';
include '../functions/conteudo.php';
//função que encaminha usuário deslogados para o sobre mim
encaminharDeslogado($mysqli);
//função que verifica conteúdo e adiciona no DB
adicionaConteudo($mysqli);
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
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="../sobre.php">Arthur</a></li>
                                    <li class="mx-2 poppins-semibold selecionado"><a class="px-3 py-2" href="sobre.php">Painel</a></li>
                                    <li class="mx-2 poppins-regular"><a class="px-3 py-2" href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
                        </section> 
                    </div>
                </div>
            </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
            <main>
                <!--ABERTURA SECTION GERENCIAR CONTEUDO-->
                <section id="gerencia-conteudo">
                    <div class="row d-flex my-5 justify-content-center">
                        <div class="col-11 col-md-10 text-center">
                            <h1 class="inter-bold mb-4">Conteúdo</h1>
                            <?php echo $_SESSION['usuario']; ?>
                        </div>
                        <div class="col-11 col-md-5 p-4 m-2 form-painel">
                            <h1 class="inter-bold">Adicionar</h1>
                            <hr>
                            <form method="POST">
                                <small class="mensagem-sucesso poppins-light"><?php if(!empty($_SESSION['sucesso-conteudo'])){ echo $_SESSION['sucesso-conteudo']; unset($_SESSION['sucesso-conteudo']);}?></small>  
                                <div class="form-group my-2">
                                    <label for="tipo" class="poppins-regular preto">Tipo</label>
                                    <select name="tipo" class="form-select">
                                        <option selected value="" class="poppins-regular">Selecionar</option>
                                        <option value="projeto" class="poppins-regular">Projeto</option>
                                        <option value="postagem" class="poppins-regular">Postagem</option>
                                    </select>  
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-tipo'])){ echo $_SESSION['erro-tipo']; unset($_SESSION['erro-tipo']);}?></small>  
                                </div>

                                <div class="form-group my-2">
                                    <label for="categoria" class="poppins-regular preto">Categoria</label>
                                    <select name="categoria" class="form-select">
                                        <option selected value="" class="poppins-regular">Selecionar</option>
                                        <option value="Notícia" class="poppins-regular">Blog - Notícia</option>
                                        <option value="Livro" class="poppins-regular">Blog - Livro</option>
                                        <option value="Devaneio" class="poppins-regular">Blog - Devaneio</option>
                                        <option value="Dica" class="poppins-regular">Blog - Dicas</option>
                                        <option value="Projeto pessoal" class="poppins-regular">Projeto - Pessoal</option>
                                        <option value="Projeto profissional" class="poppins-regular">Projeto - Profissional</option>
                                        <option value="Projeto extensão" class="poppins-regular">Projeto - Extensão</option>
                                    </select>  
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-categoria'])){ echo $_SESSION['erro-categoria']; unset($_SESSION['erro-categoria']);}?></small>  
                                </div>
                                
                                <div class="form-group my-2">
                                    <label for="titulo" class="poppins-regular preto">Título</label>
                                    <input required value="<?php if(!empty($_SESSION['input-titulo'])){echo $_SESSION['input-titulo']; unset($_SESSION['input-titulo']);}?>" class="form-control" type="text" name="titulo">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-titulo'])){ echo $_SESSION['erro-titulo']; unset($_SESSION['erro-titulo']); }?></small>
                                </div>
                                
                                <div class="form-group my-2">
                                    <label for="metatitle" class="poppins-regular preto">Meta Title</label>
                                    <input required value="<?php if(!empty($_SESSION['input-metatitle'])){echo $_SESSION['input-metatitle']; unset($_SESSION['input-metatitle']);}?>" class="form-control poppins-regular cinza" type="text" name="metatitle">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-metatitle'])){ echo $_SESSION['erro-metatitle']; unset($_SESSION['erro-metatile']);}?></small>
                                </div>

                                <div class="form-group my-2">
                                    <label for="descricao" class="poppins-regular preto">Descrição</label>
                                    <input required value="<?php if(!empty($_SESSION['input-descricao'])){echo $_SESSION['input-descricao']; unset($_SESSION['input-descricao']);}?>" class="form-control poppins-regular" type="text" name="descricao">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-descricao'])){ echo $_SESSION['erro-descricao']; unset($_SESSION['erro-descricao']);}?></small>
                                </div>
                                
                                <div class="form-group my-2">
                                    <label for="metadescription" class="poppins-regular preto">Meta Description</label>
                                    <input value="<?php if(!empty($_SESSION['input-metadescription'])){echo $_SESSION['input-metadescription']; unset($_SESSION['input-metadescription']);}?>" required class="form-control poppins-regular cinza" type="text" name="metadescription">
                                    <small class="mensagem-erro poppins-light"><?php if(!empty($_SESSION['erro-metadescription'])){ echo $_SESSION['erro-metadescription']; unset($_SESSION['erro-metadescription']);}?></small>
                                </div>

                                <div class="form-group my-2">
                                    <label for="capa" class="poppins-regular preto">Capa</label>
                                    <input required class="form-control poppins-regular cinza" type="text" name="capa">
                                </div>
                                
                                <div class="form-group my-2">
                                    <label for="link" class="poppins-regular preto">Link github</label>
                                    <input class="form-control poppins-regular cinza" type="text" name="link">
                                </div>

                                <div class="form-group my-2">
                                    <label for="conteudo" class="poppins-regular preto">Conteúdo</label>
                                    <textarea required name="conteudo" class="form-control poppins-regular"></textarea>
                                </div>

                                <button class="btn btn-primary mt-2" name="submit-conteudo"><span class="poppins-semibold">Adicionar</span></button>
                            </form>
                        </div>

                        <div class="col-11 col-md-5 p-4 m-2 form-painel">
                            <h1 class="inter-bold">Excluir</h1>
                            <hr>
                            <div id="excluir-conteudo">
                                <?php tabelaConteudo($mysqli);?>
                            </div>
                        </div>
                    </div>
                </section>
                <!--ABERTURA SECTION GERENCIAR CONTEUDO-->
            </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
            <footer>
                <div class="row d-flex justify-content-center m-0">
                    <div class="col-12 col-md-6 text-center">
                        <a class="btn btn-secondary mb-2 py-2" href="#nav-principal"> <i class="fa-solid fa-circle-arrow-up fa-lg me-3"></i><span class="poppins-semibold">Voltar para o topo</span></a>
                        <small class="poppins-regular cinza">© <?php $ano = date("Y"); echo $ano; ?> Arthur Vieira - Todos os direitos reservados.</small>
                    </div>
                </div>
            </footer>
        <!--FECHAMENTO FOOTER-->
        </div>
    </body>
</html>