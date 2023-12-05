<?php 
/* Sessões no PHP
Recurso usado para o controle de acesso à determinadas páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o acesso só é possível mediante alguma forma
de autenticação. Exemplos: login/senha, digital, facial etc.
*/

/* Verificar se já NÃO EXISTE uma sessão em funcionamento */
if( !isset($_SESSION) ){
    // Então inicie uma sessão
    session_start();
}

function verificaAcesso(){
    /* Se NÃO EXISTIR uma variável de sessão chamada
    "id" baseada no id de um usuário logado, então
    significa que ele/ela NÃO ESTÁ LOGADO(A) no sistema. */
    if(!isset($_SESSION['id'])){
        /* Portanto, destrua os dados de sessão,
        redirecione para a página login.php e pare
        o script. */
        session_destroy();
        header("location:../login.php?acesso_negado");
        exit; // ou die()
    }
}


function login($id, $nome, $tipo){
    /* Criação de variáveis de sessão
    Recursos que ficam disponíveis para uso durante
    toda a duração da sessão, ou seja, enquanto o
    navegador não for fechado ou o usuário não clicar
    em Sair. */
    $_SESSION["id"] = $id;
    $_SESSION["nome"] = $nome;
    $_SESSION["tipo"] = $tipo;
}

function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    exit; // ou die()
}

/* Esta verificação será aplicada em TODAS AS PÁGINAS
relacionadas ao gerenciamento de usuários da área
administrativa. */
function verificaTipo(){
    /* Se o tipo de usuário logado
    na sessão NÃO FOR admin */
    if( $_SESSION['tipo'] != 'admin' ){
        // Então redirecione para:
        header("location:nao-autorizado.php");
        exit;
    }
}


















