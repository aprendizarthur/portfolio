<?php
include 'conn.php'; 
//arquivo exclusivo para lidar com conteúdo (projetos/postagens do blog)

    //FUNÇÃO QUE EXIBE DOIS CONTEUDOS RECOMENDADOS NA PÁGINA DE UM CONTEÚDO
    function conteudoRecomendado($mysqli){
        $id = $mysqli->real_escape_string($_GET['id']);

        $aleatorio1 = 0;
        $aleatorio2 = 0;

        $sql_code = "SELECT id FROM conteudo ORDER BY id ASC LIMIT 1";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();
            $primeiroIndice = $dados['id'];
        }

        $sql_code = "SELECT id FROM conteudo ORDER BY id DESC LIMIT 1";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();
            $ultimoIndice = $dados['id'];
        }

        do{$aleatorio1 = rand($primeiroIndice, $ultimoIndice);
        }while($aleatorio1 == $id);

        do{$aleatorio2 = rand($primeiroIndice, $ultimoIndice);
        }while($aleatorio2 == $id || $aleatorio2 == $aleatorio1);

        echo '
            <section id="recomendado">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-md-7 mt-4 text-left">
                        <h1 class="inter-bold">Recomendado</h1>
                        <hr> 
                    </div>
        ';

        $sql_code = "SELECT * FROM conteudo WHERE id = '$aleatorio1'";

        if($query = $mysqli->query($sql_code)){
            while($dados = $query->fetch_assoc()){
                $IDconteudo = $dados['id'];
                $totalVisualizacoes = totalVisualizacoesRECOMENDADO($mysqli, $IDconteudo);
                echo '
                    <div class="col-11 col-md-7 col-lg-7 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <img class="imagem-projeto" src="'.$dados['capa'].'" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">'.$dados['categoria'].'</small>
                                        <h2 class="inter-bold">'.$dados['titulo'].'</h2>    
                                    </header>
                                    
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <p class="poppins-regular preto">
                                            '.$dados['descricao'].' 
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">'.$totalVisualizacoes.'</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="'.$dados['link1'].'"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id='.$dados['id'].'"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                ';
            }
        }

        $sql_code = "SELECT * FROM conteudo WHERE id = '$aleatorio2'";

        if($query = $mysqli->query($sql_code)){
            while($dados = $query->fetch_assoc()){
                $IDconteudo = $dados['id'];
                $totalVisualizacoes = totalVisualizacoesRECOMENDADO($mysqli, $IDconteudo);
                echo '
                    <div class="col-11 col-md-7 col-lg-7 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <img class="imagem-projeto" src="'.$dados['capa'].'" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">'.$dados['categoria'].'</small>
                                        <h2 class="inter-bold">'.$dados['titulo'].'</h2>    
                                    </header>
                                    
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <p class="poppins-regular preto">
                                            '.$dados['descricao'].' 
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">'.$totalVisualizacoes.'</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="'.$dados['link1'].'"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id='.$dados['id'].'"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                ';
            }
        }

        echo '
                </div>
            </section>
        ';
    }

    //FUNÇÕES QUE COLETAM DADOS DO PORTIFÓLIO
        function totalVISUProjetos($mysqli){
            $sql_code = "SELECT COUNT(*) AS total FROM visualizacoes WHERE tipo = 'projeto'";

            $query = $mysqli->query($sql_code);
            $dados = $query->fetch_assoc();
            
            return $dados['total'];
        }

        function totalVISUPostagens($mysqli){
            $sql_code = "SELECT COUNT(*) AS total FROM visualizacoes WHERE tipo = 'postagem'";

            $query = $mysqli->query($sql_code);
            $dados = $query->fetch_assoc();
            
            return $dados['total'];
        }

        function totalVISUGeral($mysqli){
            $sql_code = "SELECT COUNT(*) AS total FROM visualizacoes";

            $query = $mysqli->query($sql_code);
            $dados = $query->fetch_assoc();
            
            return $dados['total'];
        }

    //FUNÇÃO QUE ADICIONA VISUALIZAÇÃO AO CONTEUDO
    function adicionarVisualização($mysqli){
        $id = $mysqli->real_escape_string($_GET['id']);

        $sql_code = "SELECT tipo FROM conteudo WHERE id = '$id'";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();

            $tipo = $dados['tipo'];
        }

        verificarIDconteudo($mysqli, $id);

        $sql_code = "INSERT INTO visualizacoes (id_visualizado, tipo) VALUES ('$id', '$tipo')";

        $mysqli->query($sql_code);
    }

    //FUNÇÃO QUE CONTA O TOTAL DE VISUALIZAÇÕES DO CONTEUDO FORA DA PÁGINA CONTEUDO.PHP
    function totalVisualizacoes($mysqli, $IDconteudo){
        if(!empty($_GET['id'])){
            $id = $mysqli->real_escape_string($_GET['id']);
        } else {
            $id = $IDconteudo;
        }

        $sql_code = "SELECT COUNT(*) AS total FROM visualizacoes WHERE id_visualizado = '$id'";

        $query = $mysqli->query($sql_code);
        $dados = $query->fetch_assoc();

        return $dados['total'];
    }

    function totalVisualizacoesRECOMENDADO($mysqli, $IDconteudo){
        $sql_code = "SELECT COUNT(*) AS total FROM visualizacoes WHERE id_visualizado = '$IDconteudo'";

        $query = $mysqli->query($sql_code);
        $dados = $query->fetch_assoc();

        return $dados['total'];
    }

    //FUNÇÃO QUE EXCLUI CONTEÚDO
    function tabelaConteudo($mysqli){
        $sql_code = "SELECT * FROM conteudo ORDER BY id DESC";

        echo '
            <table class="table">
                <tr>
                    <th class="text-center poppins-semibold">ID</th>
                    <th class="text-center poppins-semibold d-none d-md-block">Título</th>
                    <th class="text-center poppins-semibold">Ação</th>
                </tr>
        ';

        if($query = $mysqli->query($sql_code)){
            while($dados = $query->fetch_assoc()){
                echo '
                    <tr>
                        <td class="text-center">'.$dados['id'].'</td>
                        <td class="d-none d-md-block text-center">'.$dados['titulo'].'</td>
                        <td class="text-center"><a href="excluir.php?id='.$dados['id'].'"><i class="fa-solid fa-trash fa-lg" style="color: #272727;"></i></a></td>
                    </tr>
                ';
            }
        }

        echo '
            </table>
        ';
    }
    //FUNÇÃO QUE VERIFICA ENVIO DE CONTEÚDO E ADICIONA NO DB
    function adicionaConteudo($mysqli){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-conteudo'])){
            $tipo = $mysqli->real_escape_string($_POST['tipo']);
            $categoria = $mysqli->real_escape_string($_POST['categoria']);
            $titulo = $mysqli->real_escape_string($_POST['titulo']);
            $metatitle = $mysqli->real_escape_string($_POST['metatitle']);
            $descricao = $mysqli->real_escape_string($_POST['descricao']);
            $metadescription = $mysqli->real_escape_string($_POST['metadescription']);
            $capa = $_POST['capa'];
            $link = $_POST['link'];
            $conteudo = $mysqli->real_escape_string($_POST['conteudo']);
            
            $_SESSION['input-conteudo'] = $conteudo;
            $_SESSION['input-link'] = $link;
            $_SESSION['input-capa'] = $capa;

            $verificacao0 = verificaTipo($tipo);
            $verificacao1 = verificaCategoria($categoria);
            $verificacao2 = verificaTitulo($titulo);
            $verificacao3 = verificaDescricao($descricao);
            $verificacao4 = verificaMetatitle($metatitle);
            $verificacao5 = verificaMetadescription($metadescription);
           
            if($verificacao0 == true && $verificacao1 == true && $verificacao2 == true && $verificacao3 == true && $verificacao4 == true && $verificacao5 == true){
                $sql_code = "INSERT INTO conteudo (tipo, categoria, capa, titulo, descricao, metatitle, metadescription, conteudomain, link1 ) VALUES ('$tipo', '$categoria', '$capa', '$titulo', '$descricao', '$metatitle', '$metadescription', '$conteudo', '$link')";
                
                if($query = $mysqli->query($sql_code)){
                    $_SESSION['sucesso-conteudo'] = "Conteúdo adicionado";
                    $_SESSION['erro-tipo'] = "";
                    $_SESSION['erro-categoria'] = "";
                    $_SESSION['input-titulo'] = "";
                    $_SESSION['erro-titulo'] = "";
                    $_SESSION['input-descricao'] = "";
                    $_SESSION['erro-descricao'] = "";
                    $_SESSION['input-metatitle'] = "";
                    $_SESSION['erro-metatitle'] = "";
                    $_SESSION['input-metadescription'] = "";
                    $_SESSION['erro-metadescription'] = "";
                    $_SESSION['input-conteudo'] = "";
                    $_SESSION['input-link'] = "";
                    $_SESSION['input-capa'] = "";
                }else{
                    header("Location: paginas-erro/erro-conexao.php");
                    exit();
                }
            }
        } 
    }

    //FUNÇÕES SECUNDÁRIAS DE VERIFICAÇÃO DE CONTEÚDO
    function verificaTipo($tipo){
        if(empty($tipo)){
            $_SESSION['erro-tipo'] = "Escolha um tipo de conteúdo";
            return false;
        } else {
            return true;
        }
    }

    function verificaCategoria($categoria){
        if(empty($categoria)){
            $_SESSION['erro-categoria'] = "Escolha uma categoria";
            return false;
        } else {
            return true;
        }
    }

    function verificaTitulo($titulo){
        if(strlen($titulo) > 20){
            $_SESSION['input-titulo'] = $titulo;
            $_SESSION['erro-titulo'] = "Título muito grande";
            return false;
        } else {
            $_SESSION['input-titulo'] = $titulo;
            return true;
        }
    }

    function verificaDescricao($descricao){
        if(strlen($descricao) > 100){
            $_SESSION['input-descricao'] = $descricao;
            $_SESSION['erro-descricao'] = "Descrição muito grande";
            return false;
        } else {
            $_SESSION['input-descricao'] = $descricao;
            return true;
        }
    }

    function verificaMetatitle($metatitle){
        if(strlen($metatitle) > 60){
            $_SESSION['input-metatitle'] = $metatitle;
            $_SESSION['erro-metatitle'] = "Título muito grande";
            return false;
        } else {
            $_SESSION['input-metatitle'] = $metatitle;
            return true;
        }
    }

    function verificaMetadescription($metadescription){
        if(strlen($metadescription) > 160){
            $_SESSION['input-metadescription'] = $metadescription;
            $_SESSION['erro-metadescription'] = "Descrição muito grande";
            return false;
        } else {
            $_SESSION['input-metadescription'] = $metadescription;
            return true;
        }
    }

    //FUNÇÃO QUE EXIBE CONTEÚDO NA PÁGINA CONTEUDO.PHP
    function exibirConteudo($mysqli){
        $id = $mysqli->real_escape_string($_GET['id']);

        verificarIDconteudo($mysqli, $id);

        $sql_code = "SELECT conteudomain FROM conteudo WHERE id = '$id'";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();
            echo $dados['conteudomain'];
        } else {
            header("Location: paginas-erro/erro-conexao.php");
        }
    }

    //FUNÇÃO QUE ADICIONA META TITLE E METADESCRIPTION AO CONTEUDO
    function inserirMETA($mysqli){
        $id = $mysqli->real_escape_string($_GET['id']);

        verificarIDconteudo($mysqli, $id);

        $sql_code = "SELECT metatitle, metadescription FROM conteudo WHERE id = '$id'";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();

            $conteudo_meta[0] = $dados['metatitle'];
            $conteudo_meta[1] = $dados['metadescription'];

            return $conteudo_meta;
        }
    }

    //FUNÇÃO QUE VERIFICA SE O ID DE CONTEUDO EXISTE
    function verificarIDconteudo($mysqli, $id){
        $sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE id = '$id'";

        if($query = $mysqli->query($sql_code)){
            $dados = $query->fetch_assoc();

            if($dados['total'] != 1){
                header("Location: paginas-erro/erro-conteudo-inexistente.php");
                exit();
            }
        }
    }

    //FUNÇÃO QUE EXIBE 4 PROJETOS NO SOBRE.PHP
    function mostrarProjetos($mysqli){
    $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="projetos">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Projetos</h1>
                        <hr> 
                    </div>
        ';

        if($query = $mysqli->query($sql_code)){
            while($dados = $query->fetch_assoc()){
                $IDconteudo = $dados['id'];
                $totalVisualizacoes = totalVisualizacoes($mysqli, $IDconteudo);
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <img class="imagem-projeto" src="'.$dados['capa'].'" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">'.$dados['categoria'].'</small>
                                        <h2 class="inter-bold">'.$dados['titulo'].'</h2>    
                                    </header>
                                    
                                    <a href="conteudo.php?id='.$dados['id'].'">
                                        <p class="poppins-regular preto">
                                            '.$dados['descricao'].' 
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">'.$totalVisualizacoes.'</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="'.$dados['link1'].'"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id='.$dados['id'].'"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                ';
            }

            echo '
                    <div class="col-11 col-md-10 mt-2 text-left">
                        <a href="projetos.php" class="poppins-semibold" style="color: #989796;"><u>Ver mais ('.totalProjetos($mysqli).')</u></a>
                    </div>
                </div>
            </section>
            ';
        }
    }

    //FUNÇÃO QUE EXIBE 4 POSTAGENS NO SOBRE.PHP
    function mostrarPostagens($mysqli){
        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' ORDER BY data DESC LIMIT 4";
    
            echo '
                <section id="projetos">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 mt-4 text-left">
                            <h1 class="inter-bold">Blog</h1>
                            <hr> 
                        </div>
            ';
    
            if($query = $mysqli->query($sql_code)){
                while($dados = $query->fetch_assoc()){
                    $IDconteudo = $dados['id'];
                    $totalVisualizacoes = totalVisualizacoes($mysqli, $IDconteudo);
                    echo '
                        <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                            <article class="projeto">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                        <a href="conteudo.php?id='.$dados['id'].'">
                                            <img class="imagem-projeto" src="'.$dados['capa'].'" alt="Alt imagem">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7">
                                        <header>
                                            <small class="poppins-regular cinza d-block mt-2 mb-1">'.$dados['categoria'].'</small>
                                            <h2 class="inter-bold">'.$dados['titulo'].'</h2>    
                                        </header>
                                        
                                        <a href="conteudo.php?id='.$dados['id'].'">
                                            <p class="poppins-regular preto">
                                                '.$dados['descricao'].' 
                                            </p>
                                        </a>
                                        <footer class="d-flex justify-content-between align-items-center">
                                            <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">'.$totalVisualizacoes.'</small></div>
                                            <div>
                                                <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id='.$dados['id'].'"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    ';
                }
    
                echo '
                        <div class="col-11 col-md-10 mt-2 text-left">
                            <a href="blog.php" class="poppins-semibold" style="color: #989796;"><u>Ver mais ('.totalPostagens($mysqli).')</u></a>
                        </div>
                    </div>
                </section>
                ';
            }
        }

        //FUNÇÃO QUE CALCULA O TOTAL DE PROJETOS NO DB
        function totalProjetos($mysqli){
            $sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE tipo = 'projeto'";

            if($query = $mysqli->query($sql_code)){
                $dados = $query->fetch_assoc();
                $total = $dados['total'];

                return "$total";
            } else {
                return "";
            }
        }

        //FUNÇÃO QUE CALCULA O TOTAL DE POSTAGENS NO DB
        function totalPostagens($mysqli){
            $sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE tipo = 'postagem'";

            if($query = $mysqli->query($sql_code)){
                $dados = $query->fetch_assoc();
                $total = $dados['total'];

                return "$total";
            } else {
                return "";
            }
        }
?>