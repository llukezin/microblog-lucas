<?php 
require_once "../inc/funcoes-noticias.php";
require_once "../inc/cabecalho-admin.php";

if(isset($_POST['inserir'])){
	$titulo = htmlspecialchars($_POST['titulo']);
	$texto = htmlspecialchars($_POST['texto']);
	$resumo = htmlspecialchars($_POST['resumo']);
	
	/* Obtendo o id da pessoa que está logada
	na sessão, e que está cadastrando uma notícia */
	$usuarioId = $_SESSION['id'];

	/* Capturando dados do arquivo de imagem/foto */
	$imagem = $_FILES['imagem'];

	/* Enviando o arquivo para o servidor */
	upload($imagem);

	/* Chamando a função para inserir a notícia */
	inserirNoticia(
		$conexao, $titulo, $texto, $resumo, 
		$imagem['name'], $usuarioId
	);

	header("location:noticias.php");

} // fim if isset inserir
?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir nova notícia
		</h2>
				
		<!-- O atributo enctype com o valor indicado
		permite ao formulário receber arquivos -->
		<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">            

			<div class="mb-3">
                <label class="form-label" for="titulo">Título:</label>
                <input class="form-control" required type="text" id="titulo" name="titulo" >
			</div>

			<div class="mb-3">
                <label class="form-label" for="texto">Texto:</label>
                <textarea class="form-control" required name="texto" id="texto" cols="50" rows="6"></textarea>
			</div>

			<div class="mb-3">
                <label class="form-label" for="resumo">Resumo (máximo de 300 caracteres):</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="2" maxlength="300"></textarea> 
			</div>

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required 
				class="form-control" type="file" id="imagem" name="imagem"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

