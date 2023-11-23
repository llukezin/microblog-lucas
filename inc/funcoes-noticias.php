<?php
require "conecta.php";

/* Usada em noticia-insere.php */
function inserirNoticia($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim inserirNoticia


/* Usada em noticia-insere.php e noticia-atualiza.php */
function upload($arquivo){
    
    $tiposValidos = [
        "image/png", "image/jpeg",
        "image-gif", "image/svg+xml"
    ];

    if(!in_array($arquivo['type'], $tiposValidos)){
        echo "<script>
            alert('formato inválido!'); history.back();
            </script>";
            exit;
    }

    $nome = $arquivo['name'];
    $temporario = $arquivo['tmp-name'];
    $destino = "../imagens/".$nome;
    move_uploaded_file($temporario, $destino);
} // fim upload


/* Usada em noticias.php */
function lerNoticias($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerNoticias


/* Usada em noticias.php e páginas da área pública */
function formataData(){    
    
} // fim formataData


/* Usada em noticia-atualiza.php */
function lerUmaNoticia($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerUmaNoticia


/* Usada em noticia-atualiza.php */
function atualizarNoticia($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim atualizarNoticia


/* Usada em noticia-exclui.php */
function excluirNoticia($conexao){


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim excluirNoticia



/* ******************************************************* */


/* Funções usadas nas páginas da área pública */

/* Usada em index.php */
function lerTodasAsNoticias($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerTodasAsNoticias


/* Usada em noticia.php */
function lerDetalhes($conexao){
    

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerDetalhes


/* Usada em resultados.php */
function busca($conexao){
    
    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim busca
