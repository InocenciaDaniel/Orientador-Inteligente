<?php
	session_start();
	include("db.php");
	
	$conector = conexao();

	function alert($msg) 
	{
	    echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	if (isset($_POST['enviarDadosFormulario'])) 
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];

		$idade = $_POST['idade'];
		$sexo = $_POST['sexo'];
		$cidade = $_POST['cidade'];

		$data = date('Y-m-d');
		
		if (!empty($nome) && !empty($email) && !empty($idade) && !empty($cidade)) {
		
			$insercao = $conector->prepare("INSERT INTO tb_usuario(nome,idade,sexo,cidade,email,data) 
															values(:nome,:idade,:sexo,:cidade,:email,:data) ");
			$insercao->bindValue(":nome",$nome);
			$insercao->bindValue(":email",$email);
			$insercao->bindValue(":idade",$idade);
			$insercao->bindValue(":sexo",$sexo);
			$insercao->bindValue(":cidade",$cidade);
			$insercao->bindValue(":data",$data);
		}
		else{
			alert("Insere correctamento os seus dados.");
		}

		$validarCadastro = $conector->prepare(" SELECT * FROM tb_usuario WHERE email=?");
		$validarCadastro->execute( array( $email ) );

		if ( $validarCadastro->rowCount() == 0 ) 
		{
			$insercao->execute();
			
			if(isset($_POST['nome']))
	        {
	            $_SESSION['nome']=$_POST['nome'] ;

	        }
	        if(isset($_POST['email']))
	        {
	            $_SESSION['email']=$_POST['email'] ;
	        }

	        if(isset($_POST['idade']))
	        {
	            $_SESSION['idade']=$_POST['idade'] ;

	        }
	        if(isset($_POST['sexo']))
	        {
	            $_SESSION['sexo']=$_POST['sexo'] ;

	        }
	        if(isset($_POST['cidade']))
	        {
	          $_SESSION['cidade']=$_POST['cidade'] ;

	        }
	        header("location:perguntas.php");
		}
		else
		{	
			alert("Precisa fazer o registrp ! Tente com outro por favor");
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
		<link rel="stylesheet" type="text/css" href="css/cadastro.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<nav>	
			<div class="row corDivCima">
				<div class="col-md-12">
					<h4 class="p-3">Seja Bem Vindo ao Orientador Inteligente</h4>
				</div>
			</div>
			<div class="row corDivBaixo">
				<div class="col-sm-10">
					<label class="p-2 ml-2">Faça o seu cadastro</label>
				</div>
				<div class="col-sm-2 corDivBaixoDireito">
					<!--<label class="p-2 ml-2"><a href="perguntas.php">Teste Anonimo</a></label>-->
					<label class="p-2 ml-2"><a href="index.php">Voltar</a></label>	
				</div>
			</div>
		</nav>
		<main>
			<div class="row justify-content-center mb-5 mt-5">
				<div class="col-sm-12 col-md-10 col-lg-8" >
					<form action="" method="POST">
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label for="nomee">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Ricardo Alves" >
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label for="idade">Idade</label>
								<input type="number" class="form-control" id="idade" name="idade" placeholder="Ex: 14 " >
							</div>
							<div class="form-group col-sm-4">
								<label for="sexo">Sexo</label>
								<select class="form-control" id="sexo" name="sexo" >
									<option>Masculino</option>
									<option>Feminino</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="cidade">Cidade</label>
									<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Ex: Luanda " >
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Ex: ricardo.alves@hotmail.com" >
							</div>	
						</div>
						<div class="form-row">
							<div class="form-group col-sm-10">
								<div class="form-check">
									<label class="form-check-label text-primary">
										<input type="checkbox" class="form-check-input" name="sendEmail" > Deseja receber notificações por email ?
									</label>
								</div>
							</div>
							<div class="form-group col-sm-2">
								<div class="form-group">
									<input type="submit" class="form-check-input continuar" name="enviarDadosFormulario" value="Cadastrar"> 
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
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>