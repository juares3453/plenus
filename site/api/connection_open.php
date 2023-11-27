<?php

if(basename($_SERVER["PHP_SELF"]) != 'connection_open.php'){

	$dbtype = "sqlsrv"; //ver qual é o banco de dados
	$dbhost = ""; //ip e porta do banco externo
	$dtbase = ""; //nome do banco
	$dbname = ""; //usuario
	$dbpass = ""; //senha

	try {

		$conn = new PDO("$dbtype:Server=$dbhost;Database=$dtbase","$dbname","$dbpass");

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	} catch (PDOException $e) {
		die ("Erro na conexao com o banco de dados: ".$e->getMessage());
	}

} else {

	header('location: index');
	exit();

}