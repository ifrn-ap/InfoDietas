<?php
session_start(); // sempre na primeira linha do codigo

	include 'views/header.php';

?>
<center><h2>Cadastro de Dieta</h2></center>
<br>

<div class="row">
    <div class="col-md-12">
      <form role="form" action="cadastro_dieta.php" method="POST">
   
  <div class="form-group">
    <label for="nome_dieta">
      Nome da Dieta
    </label>
    <input type="text" class="form-control" name="nome_dieta" id="nome_dieta">
  </div>
  
  <div class="form-group">
    <label for="data_dieta">
      Data de Cadastro
    </label>
    <input type="date" class="form-control" name="data_dieta" id="data_dieta">
  </div>
  <button type="submit" class="btn btn-default">
      Cadastrar
  </button>
</form>
</div>
</div>

<?php
  	include 'views/footer.php';
?>