<?php
	include("db.php");

	$conector = conexao();

	if (isset($_POST['logar'])) 
	{
		$nome = $_POST['nome'];
		$senha =$_POST['senha'];
		$busca = $conector->prepare("SELECT * from logar WHERE nome=:nome and senha=:senha ");

    	$busca->bindParam(":nome", $nome, PDO::PARAM_STR);
    	$busca->bindParam(":senha", $senha, PDO::PARAM_STR);

    	$busca->execute();

    	if ( $busca->rowCount() == 0)
		{
			header("location:index.php");
		}
		else
		{
			header("location:listar.php");	
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema Especialista - Orientador Inteligente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav>
		<div class="row corDivCima">
			<div class="col-md-12">
				<h4 class="p-3">Orientador Inteligente</h4>
			</div>
		</div>
		<div class="row corDivBaixo">
			<div class="col-sm-10">
				<!--<label class="p-2 ml-2">Login ( Usuario = root ; Senha = root ) ---- Consulta ( Não precisa de login - clicar no botão logar ) </label>-->
			</div>
			<div class="col-sm-2 corDivBaixoDireito">
				<label class="p-2 ml-2">Sobre</label>
			</div>
		</div>
	</nav>

	<main>
		<div class="row justify-content-center mb-5 mt-5">
			<div class="col-sm-12 col-md-10 col-lg-8" >
				<form action="" method="POST">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="nome">Usuario</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="senha">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha" >
							
						</div>
					</div>
					<div class="form-group col-sm-2">
							<div class="form-group">								
									<input type="submit" class="form-check-input btn btn-primary" name="logar" value="Logar"> 
							</div>
					</div>
				</div>
			</form>
		</div>	
	</div>	
		<div class="rodape">
			<p class="p-4">Orientador Inteligente &copy; 2021 - Sistemas Inteligentes 2</p>
		</div>
	</main>
	<script type="text/javascript" src="js/index.js">
	</script>
</body>
</html>