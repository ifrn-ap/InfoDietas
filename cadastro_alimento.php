<?php 
	
	require "conexaoCB.php";

//cadastro de livro
	$nome_do_alimento = $_POST["nome_do_alimento"];
	$quantidade = $_POST["quantidade"];
	$vestigios = $_POST["vestigios"];
	$aditivos = $_POST["aditivos"];
	
	

	$CADASTRA = mysqli_query($connect, "INSERT INTO alimento(nome_alimento, quantidade, vestigios, aditivos)
		VALUES ('$nome_do_alimento', '$quantidade', '$vestigios', '$aditivos')");

	header ("Location: cadastrar_alimento.php");

 ?>