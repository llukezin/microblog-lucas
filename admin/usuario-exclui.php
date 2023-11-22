<?php
require "../inc/funcoes-usuarios.php";
$id = $_GET['id'];
excluirUsuario($conexao, $id);
header("location:usuarios.php");