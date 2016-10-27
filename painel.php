<?php
	include 'views/header.php';
?>
<body>
<div class="row">
	<div class="col-md-12">
		<center>
		<h2>
			Seja Bem Vindo ao Info Dietas
		</h2>
		</center>
	</div>
	
</div>

<?php  include("conexaoCB.php");

	$consulta = "SELECT * FROM dieta";
	$funcao = $connect->query($consulta) or die($connect->error);
?>

<?php while($dados = $funcao->fetch_array()){ 
 		
 		$texto = $dados['nome_dieta'];

 		echo '
 		 

 		<div class="row propriobutao2 col-md-4">
            <div class="portfolio-item">
               <a href="exibir_dieta.php?tx='.$texto.'" class="btn btn-default propriobutao1"><br><br>'.$dados['nome_dieta'].'</a>
                
            </div>
        </div>
 		
 		';} ?>



 		<div class="row butaoexclusao propriobutao2 col-md-4 thumbnail">
            <div class="portfolio-item">
<br>
					<div>
						<h3>Excluir Dieta!</h3>
					</div>
					
					<form role="form" action="excluir_dieta.php" method="POST">
		  	<input name="acao" type="text" value="add-ator" hidden />
		 	 <input name="codigo" type="text" value="" hidden />
		  
			  	<div class="form-group">
			   	 	<label for="nome">
			     		Número da Dieta:
			    	</label>
			    	<input type="text" class="form-control" name="excluir_dieta" id="nome">
			 	</div>
			 	<button type="submit" class="btn btn-default">
		      <span class="glyphicon glyphicon-remove"> Excluir</span>
		  		</button>
			  </form>
			</div>
		</div>	

</body>

<?php 
	include 'views/footer.php';
?>1