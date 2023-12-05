<?php
require "../inc/funcoes-sessao.php";
require "../inc/funcoes-usuarios.php";

verificaAcesso();

// Verificando se o usuário pode entrar nesta página
verificaTipo();

$id = $_GET['id'];
excluirUsuario($conexao, $id);
header("location:usuarios.php");