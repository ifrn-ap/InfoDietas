<?php 

include 'conexaoCB.php';

$senha = $_POST['senha'];
$email = $_POST['email'];
$sql = mysqli_query($connect, "SELECT * FROM paciente WHERE email='$email' AND senha='$senha'");

if(mysqli_num_rows($sql)>0){
header("Location: painel.php");
}else{
$_SESSION['erro']="Login ou senha incorreto";
header("Location: index.php");
}


?>