<?php
	include("db.php");

	session_start();

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
		
		$insercao = $conector->prepare("INSERT INTO tb_usuario(nome, idade, sexo, cidade, email, data) 
														values(:nome, :idade, :sexo, :cidade, :email, :data) ");
		$insercao->bindValue(":nome",$nome);
		$insercao->bindValue(":email",$email);
		$insercao->bindValue(":idade",$idade);
		$insercao->bindValue(":sexo",$sexo);
		$insercao->bindValue(":cidade",$cidade);
		$insercao->bindValue(":data",$data);

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
			alert("Usuário ja fez o teste ! Tente com outro por favor");
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
					<label class="p-2 ml-2">Resultados guardados</label>
				</div>
				<div class="col-sm-2 corDivBaixoDireito">
					<label class="p-2 ml-2"><a href="login.php">Sair</a></label>
				</div>
			</div>
		</nav>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-bordered table-hover table-condensed mt-4">
				   			<thead>
				   				<tr>
				   					<th>Primeiro Nome</th>
				   					<th>Idade</th>
				   					<th>Sexo</th>
				   					<th>Cidade</th>
				   					<th>Email</th>
				   					<th>Vocação</th>
				   					<th>Data da consulta </th>
				   				</tr>
				   			</thead>
				   			<tbody>
				   				<?php
				   						$listar = $conector->prepare(" SELECT * FROM tb_usuario ");
				   						$listar->execute();

				   				while ($rs = $listar->fetch(PDO::FETCH_OBJ))
				   				{
				   				?>
				   					<tr class="success">
										<td><?php echo $rs->nome; ?></td>
										<td><?php echo $rs->idade; ?></td>
										<td><?php echo $rs->sexo; ?></td>	
										<td><?php echo $rs->cidade; ?></td>
										<td><?php echo $rs->email; ?></td>	
										<td><?php echo $rs->resultado; ?></td>	
										<td><?php echo $rs->data; ?></td>				
				   					</tr>
				   				<?php
				   				}	
				   				?>
				   			</tbody>
				   		</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mb-5 mt-5"></div>
			<div class="rodape">
				<p class="p-4">Orientador Inteligente &copy; 2021 - Sistemas Inteligentes 2</p>
			</div>
		</main>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>