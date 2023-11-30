<?php
require "../inc/funcoes-noticias.php";
require "../inc/funcoes-sessao.php";
verificaAcesso();

// PEGANDO O ID DA NOTICIA (DA URL) QUE VAI EXCLUIR 
$idNoticia = $_GET['id'];

// PEGANDO TIPO DO USUARIO (DA SESSION)
$tipoUsuario = $_SESSION['tipo'];

// PEGANDO ID DO USUARIO (DA SESSION)
$idUsuario = $_SESSION['id'];

// Executar a função
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

// Redirecionar para noticias.php
header("location:noticias.php");