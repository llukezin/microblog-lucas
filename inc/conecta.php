<?php
/* Script de conexão ao servidor
de bancos de Dados */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_lucas";

/*  Usando a função mysqli_connect para conectar ao
servidor de banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/*  Definindo o charset da conexão também como utf8 */
mysqli_set_charset($conexao, "utf8");

/* Verificação da conexão */

// Se NÃO FOR POSSÍVEL realizar a conexão
if( !$conexao ){
    // PARE  a aplicação e mostre uma mensagem de erro
   die("deu ruim: ".mysqli_connect_error());
}else {
    // Senão, a conexão foi feita com sucesso!
    echo "Beleza, conectado!";
}