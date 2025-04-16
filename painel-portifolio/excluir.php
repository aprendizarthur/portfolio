<?php 
session_start();
include '../functions/sessions.php';

//função que redireciona quem não está logado
encaminharDeslogado($mysqli);

//arquivo exclusivo para excluir conteudo selecionado no painel
$id = $mysqli->real_escape_string($_GET['id']);

$sql_code = "SELECT COUNT(*) AS total FROM conteudo WHERE id = '$id'";

if($query = $mysqli->query($sql_code)){
    $dados = $query->fetch_assoc();

    if($dados['total'] != 0){
        $sql_code = "DELETE FROM conteudo WHERE id = '$id' ";

        if($query = $mysqli->query($sql_code)){
            header("Location: painel.php");
        }    
    } else{
        header("Location: painel.php");
    }
} else {
    header("Location: paginas-erro/erro-conexao.php");
    exit();
}
?>