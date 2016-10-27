<?php 
	
	require "conexaoCB.php";

//excluir aluno
	$excluir_dieta = $_POST["excluir_dieta"];

	

	$EXCLUI2 = mysqli_query($connect, "DELETE FROM dieta WHERE nome_dieta = '$excluir_dieta'");

	header ("Location: painel.php");

 ?>