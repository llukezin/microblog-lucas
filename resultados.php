<?php // resultados.php
require "inc/funcoes-noticias.php"; 
require "inc/cabecalho.php"; 

// Capturando o que foi buscado/digitado no campo
$termoDigitado =  mysqli_real_escape_string($conexao,$_GET['busca']);

// Executando a busca no banco de dados
$resultadoDaBusca = busca($conexao, $termoDigitado);
?>

<div class="row bg-white rounded shadow my-1 py-4">
    <h2 class="col-12 fw-light">
        Você procurou por 
<span class="badge bg-dark"><?=$termoDigitado?></span> e
        obteve <span class="badge bg-info">
            <?=count($resultadoDaBusca)?>
        </span> resultados
    </h2>  

    <?php foreach($resultadoDaBusca as $noticia) { ?>
    <div class="col-12 my-1">
        <article class="card">
            <div class="card-body">
                <h3 class="fs-4 card-title fw-light"><?=$noticia['titulo']?></h3>
                <p class="card-text">
                    <time><?=formataData($noticia['data'])?></time> - 
                    <?=$noticia['resumo']?>
                </p>
                
                <a href="noticia.php?id=<?=$noticia['id']?>" class="btn btn-primary btn-sm">Continuar lendo</a>
            </div>
        </article>
    </div>
    <?php } ?>


</div>     

<?php 
require_once "inc/rodape.php";
?>

