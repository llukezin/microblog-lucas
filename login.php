<?php
require "inc/funcoes-sessao.php"; 
require "inc/funcoes-usuarios.php"; 
require "inc/cabecalho.php"; 

/* Mensagens de feedback de acordo com 
os parâmetros de URL */
if(isset($_GET['acesso_negado'])){
	$mensagem = "Você deve logar primeiro!";

} elseif(isset($_GET['dados_incorretos'])){
	$mensagem = "Dados incorretos, verifique!";

} elseif(isset($_GET['saiu'])){
	$mensagem = "Você saiu do sistema!";

} elseif(isset($_GET['campos_obrigatorios'])){
	$mensagem = "Preencha e-mail e senha!";
}



if(isset($_POST['entrar'])){
	
	/* VALIDAÇÃO 2º NÍVEL: BACK-END */
	/* Verificando se os campos estão vazios */
	if( empty($_POST['email']) || empty($_POST['senha']) ){
		header("location:login.php?campos_obrigatorios");
		exit;
	} // fim if empty

	/* Capturando os dados digitados */
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	/* Buscando no banco através do e-mail digitado
	se existe um usuário cadastrado */
	$usuario = buscaUsuario($conexao, $email);

	/* Verificação de usuario e senha 
	Se usuario existe (diferente de null) E a verificação da senha
	der certo (password_verify) */
	if($usuario != null && password_verify($senha, $usuario['senha'])){
		// Então, inicie o processo de login
		login($usuario['id'], $usuario['nome'], $usuario['tipo']);

		// Redirecione para a index administrativa
		header("location:admin/index.php");

		exit; // pare qualquer outro script
	} else {
		// Caso contrário, senha está errada (mas não diga...)
		header("location:login.php?dados_incorretos");
		exit;
	}
	
} // fim if isset entrar
?>

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
    <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">


				<?php if( isset($mensagem) ){ ?>
				<p class="my-2 alert alert-warning text-center">
					<?=$mensagem?>
				</p>          
				<?php } ?>      

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<!-- REQUIRED VALIDAÇÃO 1º NIVEL: FRONT-END -->
					<input required class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input required class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

    </div>
    
    
</div>        

<?php 
require_once "inc/rodape.php";
?>

