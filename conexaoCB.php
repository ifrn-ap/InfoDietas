 <?php 

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "mydb";

$connect = mysqli_connect($host, $usuario, $senha, $bd);

if(!$connect){
	echo "A conexão apresentou um ERRO:<br>" .mysqli_connect_error();
}
?>