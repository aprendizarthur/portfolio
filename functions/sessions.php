<?php 
include 'conn.php';
//arquivo exclusivo para lidar com sessões de usuários (gerenciar conteúdo)
    
    //FUNÇÃO DE LOGIN PAINEL
    function login($mysqli){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
            $_SESSION['erro-usuario'] = "";
            $_SESSION['erro-senha'] = "";

            $username = $mysqli->real_escape_string($_POST['username']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $controle1 = '';
            $controle2 = '';
            
            //verificando se existe o usuário
            $sql_code = "SELECT COUNT(*) AS total FROM usuarios WHERE usuario = '$username'";

            if($query = $mysqli->query($sql_code)){
                $dados = $query->fetch_assoc();

                if($dados['total'] == 1){
                    
                } else {
                    $controle1 = 'Erro';
                    $_SESSION['erro-usuario'] = "Usuário não encontrado";
                }
            }

            //verificando senha
            $sql_code = "SELECT COUNT(*) AS total FROM usuarios WHERE usuario = '$username' AND senha = '$senha'";

            if($query = $mysqli->query($sql_code)){
                $dados = $query->fetch_assoc();

                if($dados['total'] == 1){
                    
                } else {
                    $controle2 = 'Erro';
                    $_SESSION['erro-senha'] = "Senha incorreta";
                }
            }

            //se não houver erros, passa o usuário pra session e encaminha para o painel
            if($controle1 == '' && $controle2 == ''){
                $_SESSION['usuario'] = $username;
                header("Location: painel.php");
            }
        }
    }

    //FUNÇÃO QUE ENCAMINHA USUARIO LOGADO DO LOGIN PARA O PAINEL
    function encaminharLogado($mysqli){
        if(!empty($_SESSION['usuario'])){
            header("Location: painel.php");
        }
    }

    //FUNÇÃO QUE ENCAMINHA USUARIO DESLOGADO DE PÁGINAS SENSÍVEIS PARA O SOBRE MIM
    function encaminharDeslogado($mysqli){
        if(empty($_SESSION['usuario'])){
            header("Location: ../sobre.php");
        }
    }
?>