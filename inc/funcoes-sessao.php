<?php
/*  Sessões no PHP
recurso usado para o controle de acesso á determinadas páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o acesso só é possivel mediante alguma forma de autenticação. Exemplos: Login/senha, digital, facial etc.*/

/*  Verificar se já NÃO EXISTE uma sessão em funcionamento */
if( isset($_SESSION) ){
    // então inicie uma sessão
    session_start();
}

function verificaAcesso(){
    /* se NÃO EXISTIR uma variavel de sessão chamada "id" baseada no id de um usuario logado, então
    significa que ele/ela NÃO ESTÁ LOGADO(A) no sistema. */
    if(!isset($_SESSION['id'])){
        /* Portanto, destrua os daods de sessão, redirecione para a pagiina login.php r para o script */
        session_destroy();
        header("location:../login.php?acesso_negado");
        exit; // die()
    }
}


function login($id, $nome, $tipo){
    /* Criação de variaveis de sessão
    Recursos que ficam disponiveis par o uso durante toda a duração da sessão,
    ou seja , enquanto o nevador não for fechado ou osuario não clicar em sair */
    $_SESSION["id"] = $id;
    $_SESSION["nome"] = $nome;
    $_SESSION["tipo"] = $tipo;
}

function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    exit; // ou die()
}