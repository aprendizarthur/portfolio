<?php
include 'conn.php';
include 'conteudo.php';
// arquivo exclusivo para lidar com funções de pesquisa

// função de pesquisa para página projetos
function pesquisaProjetos($mysqli) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit-pesquisa'])) {
        $pesquisa = $mysqli->real_escape_string($_GET['pesquisa']);

        $sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE tipo = 'projeto' AND (titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%' OR conteudomain LIKE '%$pesquisa%')";

        if ($query = $mysqli->query($sql_code)) {
            $dados = $query->fetch_assoc();

            if ($dados['total'] == 0) {
                echo '
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 mt-4 text-left">
                            <h1 class="inter-bold">Resultado</h1>
                            <hr>
                        </div>
                        <div class="col-11 col-md-10 mt-4">
                            <p class="poppins-semibold cinza"><i class="fa-solid fa-face-frown fa-lg me-2"></i> Nenhum resultado encontrado</p>
                        </div>
                    </div>
                ';
            } else {
                $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' AND (titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%' OR conteudomain LIKE '%$pesquisa%')";

                echo '
                    <section id="projetos">
                        <div class="row d-flex justify-content-center">
                            <div class="col-11 col-md-10 mt-4 text-left">
                                <h1 class="inter-bold">Resultado</h1>
                                <hr>
                            </div>
                ';

                if ($query = $mysqli->query($sql_code)) {
                    while ($dados = $query->fetch_assoc()) {
                        echo '
                            <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                                <article class="projeto">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                            <a href="conteudo.php?id=' . $dados['id'] . '">
                                                <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-7">
                                            <header>
                                                <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                                <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                            </header>
                                            <a href="conteudo.php?id=' . $dados['id'] . '">
                                                <p class="poppins-regular preto">
                                                    ' . $dados['descricao'] . '
                                                </p>
                                            </a>
                                            <footer class="d-flex justify-content-between align-items-center">
                                                <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                                <div>
                                                    <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                                    <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                                </div>
                                            </footer>
                                        </div>
oot.html
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
        }
    } else {
        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="projetos">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Recentes</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                ';
            }

            echo '
                </div>
            </section>
            ';
        }

        echo '
            <!--ABERTURA SECTION CONTATO-->
            <section id="contato">
                <div class="row d-flex justify-content-center align-items-center my-5">
                    <div class="col-11 col-md-10 bg-preto p-4 d-flex justify-content-center">
                        <hgroup>
                            <h1 class="inter-bold branco">Tem algum projeto em mente?</h1>
                            <h2 class="poppins-semibold cinza">Entre em contato comigo.</h2>
                            <a class="mt-2 py-2 btn btn-tertiary" href=""><span class="poppins-semibold">Contato</span></a>
                        </hgroup>
                    </div>
                </div>
            </section>
            <!--FECHAMENTO SECTION CONTATO-->
        ';

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' AND categoria = 'Projeto pessoal' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="projeto-pessoal">
                <div class="row d-flex mb-4 justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Projetos pessoais</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="projetos.php?pesquisa=Projeto+Pessoal&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' AND categoria = 'Projeto Profissional' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="projeto-profissional">
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Projetos profissionais</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="projetos.php?pesquisa=Projeto+Profissional&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'projeto' AND categoria = 'Projeto Extensão' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="projeto-extensao">
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Projetos extensão</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="projetos.php?pesquisa=Projeto+Extensão&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }
    }
}

// função de pesquisa para página blog
function pesquisaPostagens($mysqli) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit-pesquisa'])) {
        $pesquisa = $mysqli->real_escape_string($_GET['pesquisa']);

        $sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE tipo = 'postagem' AND (titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%' OR conteudomain LIKE '%$pesquisa%')";

        if ($query = $mysqli->query($sql_code)) {
            $dados = $query->fetch_assoc();

            if ($dados['total'] == 0) {
                echo '
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-md-10 mt-4 text-left">
                            <h1 class="inter-bold">Resultado</h1>
                            <hr>
                        </div>
                        <div class="col-11 col-md-10 mt-4">
                            <p class="poppins-semibold cinza"><i class="fa-solid fa-face-frown fa-lg me-2"></i> Nenhum resultado encontrado</p>
                        </div>
                    </div>
                ';
            } else {
                $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' AND (titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%' OR conteudomain LIKE '%$pesquisa%')";

                echo '
                    <section id="projetos">
                        <div class="row d-flex justify-content-center">
                            <div class="col-11 col-md-10 mt-4 text-left">
                                <h1 class="inter-bold">Resultado</h1>
                                <hr>
                            </div>
                ';

                if ($query = $mysqli->query($sql_code)) {
                    while ($dados = $query->fetch_assoc()) {
                        echo '
                            <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                                <article class="projeto">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                            <a href="conteudo.php?id=' . $dados['id'] . '">
                                                <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-7">
                                            <header>
                                                <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                                <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                            </header>
                                            <a href="conteudo.php?id=' . $dados['id'] . '">
                                                <p class="poppins-regular preto">
                                                    ' . $dados['descricao'] . '
                                                </p>
                                            </a>
                                            <footer class="d-flex justify-content-between align-items-center">
                                                <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                                <div>
                                                    <a class="d-inline btn btn-secondary mx-1 p-2" href="' . $dados['link1'] . '"><i class="fa-brands fa-github fa-xl"></i></a>
                                                    <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
        }
    } else {
        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="postagens">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Recentes</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                ';
            }

            echo '
                </div>
            </section>
            ';

            echo '
                <!--ABERTURA SECTION CONTATO-->
                <section id="contato">
                    <div class="row d-flex justify-content-center align-items-center my-5">
                        <div class="col-11 col-md-10 bg-preto p-4 d-flex justify-content-center">
                            <hgroup>
                                <h1 class="inter-bold branco">Tem algum projeto em mente?</h1>
                                <h2 class="poppins-semibold cinza">Entre em contato comigo.</h2>
                                <a class="mt-2 py-2 btn btn-tertiary" href=""><span class="poppins-semibold">Contato</span></a>
                            </hgroup>
                        </div>
                    </div>
                </section>
                <!--FECHAMENTO SECTION CONTATO-->
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' AND categoria = 'Notícia' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="noticia">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Notícias</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="blog.php?pesquisa=Notícia&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' AND categoria = 'Dica' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="dica">
                <div class="row d-flex mt-4 justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Dicas</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="blog.php?pesquisa=Dica&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' AND categoria = 'Livro' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="livro">
                <div class="row d-flex mt-4 justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Livros</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="blog.php?pesquisa=Livro&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }

        $sql_code = "SELECT * FROM conteudo WHERE tipo = 'postagem' AND categoria = 'Devaneio' ORDER BY data DESC LIMIT 4";

        echo '
            <section id="devaneio">
                <div class="row d-flex mt-4 justify-content-center">
                    <div class="col-11 col-md-10 mt-4 text-left">
                        <h1 class="inter-bold">Devaneios</h1>
                        <hr>
                    </div>
        ';

        if ($query = $mysqli->query($sql_code)) {
            while ($dados = $query->fetch_assoc()) {
                echo '
                    <div class="col-11 col-md-5 col-lg-5 m-2 p-3 box-projetos">
                        <article class="projeto">
                            <div class="row d-flex justify-content-between">
                                <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center">
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <img class="imagem-projeto" src="' . $dados['capa'] . '" alt="Alt imagem">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7">
                                    <header>
                                        <small class="poppins-regular cinza d-block mt-2 mb-1">' . $dados['categoria'] . '</small>
                                        <h2 class="inter-bold">' . $dados['titulo'] . '</h2>
                                    </header>
                                    <a href="conteudo.php?id=' . $dados['id'] . '">
                                        <p class="poppins-regular preto">
                                            ' . $dados['descricao'] . '
                                        </p>
                                    </a>
                                    <footer class="d-flex justify-content-between align-items-center">
                                        <div><i class="fa-solid fa-eye fa-sm me-1" style="color: #989796;"></i><small class="poppins-regular cinza">1.290</small></div>
                                        <div>
                                            <a class="d-inline btn btn-primary mx-1 p-2" href="conteudo.php?id=' . $dados['id'] . '"><i class="fa-solid fa-circle-arrow-right fa-lg"></i></a>
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
                        <a href="blog.php?pesquisa=Devaneio&submit-pesquisa=" class="poppins-semibold" style="color: #989796;"><u>Ver todos</u></a>
                    </div>
                </div>
            </section>
            ';
        }
    }
}
?>