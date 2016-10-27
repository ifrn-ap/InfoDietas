<?php 
	
	require "conexaoCB.php";

//cadastro de turma
	$nome_dieta = $_POST["nome_dieta"];
	$data_dieta= $_POST["data_dieta"];

session_start();
$id = $_SESSION['idpaciente'];

	
	$CADASTRA = mysqli_query($connect, "INSERT INTO dieta (paciente_idpaciente, nome_dieta, data_dieta) 
		VALUES ('".$id."', '".$nome_dieta."', '".$data_dieta."')");
	var_dump($CADASTRA);
	header ("Location: cadastrar_dieta.php");

 ?>