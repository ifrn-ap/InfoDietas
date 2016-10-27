<?php 
	
	require "conexaoCB.php";

//cadastro de turma
	$email_usuario = $_POST["email_usu"];
	$senha_usuario = $_POST["senha_usu"];
	$nome_com = $_POST["nome_completo"];
	$altura = $_POST["altura"];
	$peso = $_POST["peso"];
	$idade = $_POST["idade"];
	$objetivo = $_POST["objetivo"];
	$doencas = $_POST["doencas"];

session_start();
$id = $_SESSION['idpaciente'];

	
	$CADASTRA = mysqli_query($connect, "INSERT INTO dieta(email, senha, nome, idade, doencas, altura, peso, objetivo) 
		VALUES ('$email_usuario', '$senha_usuario', '$nome_com', '$idade', '$doencas', '$altura', '$peso', '$objetivo')");
	var_dump($CADASTRA);
	header ("Location: cadastrar_dieta.php");

 ?>