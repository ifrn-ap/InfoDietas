<?php
	include 'views/header.php';
	
?>
<?php
include("conexaoCB.php");

 $consulta1 = "SELECT * FROM alimento";
	$funcao1 = $connect->query($consulta1) or die($connect->error);
?>
<table border="1" bordercolor="#696969" align="center" class="table-bordered">

 		<center><h2>Cadastro de Alimento</h2></center>
		<br>

 		<tr bgcolor="#800080">
 			<td class="center">Nome</td>
			<td class="center">Quantidade/Medida</td> 
			<td class="center">Vestigios</td>
			<td class="center">Aditivos</td>			
 		</tr>

 		<?php while($dados1 = $funcao1->fetch_array()){ ?>
 		
 		<tr>
 			<td class="center" bgcolor="#9932CC"><?php echo $dados1["nome_alimento"]; ?></td>
 			<td class="center" bgcolor="#9932CC"><?php echo $dados1["quantidade"]; ?></td>
 			<td class="center" bgcolor="#9932CC"><?php echo $dados1["vestigios"]; ?></td>
 			<td class="center" bgcolor="#9932CC"><?php echo $dados1["aditivos"]; ?></td>
 		</tr>
 		
 		
 		<?php } ?>s
 	
 	</table>
 	<?php

  	include 'views/footer.php';
?>