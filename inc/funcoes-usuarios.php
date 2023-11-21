<?php

require "conecta.php";
                        // PARÂMETROS
function inserirUsuario($conexao, $nome, $email, $senha, $tipo){
    /*  Montando uma variavel com o comando SQL de  INSERT 
    e com os dados (parâmetros) recebidos pela função */
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo)
    VALUES('$nome', '$email', '$senha', '$tipo')";

    /*  Executando o comando SQL */
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}


function lerUSuarios($conexao){
    // Comando SQL para fazerm a leitura de dados (SELECT)
    $sql = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";

    // Execução do comando e armazenamento da consulta/query
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retornamos  resultado da query transformando em array associativo
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}