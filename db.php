<?php	
	function conexao()
	{
		try
		{
			$conectar = new PDO("mysql:host=localhost;dbname=orientador","root","");
			$conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return $conectar;
	}
?>