<?php
	
	$servername = "localhost";
  	$username = "root";
  	$password = "";

	try
	{
		//instancia objeto PDO, conectando no mysql
		
		$conn = new PDO("mysql:host=$servername;dbname=dblivro", $username, $password);
		
		//executa uma série de instruções SQL
		
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (1,'Érico Veríssimo')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (2,'John Lennon')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (3,'Mahatma Gandhí')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (4,'Ayrton Senna')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (5,'Charlie Chaplin')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (6,'Anita Garibaldi')");
		$conn->exec("INSERT INTO famosos(codigo,nome) VALUES (7,'Mário Quintana')");
		
		// fecha a conexão
		
		$conn = null;
	}
	catch (PDOException $e)
	{
		//caso ocorra uma exceção, exibe na tela
		print "Erro!: " . $e->getMessage() . "\n";
		die();
	}
?>
