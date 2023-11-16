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