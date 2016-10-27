<?php
	include 'views/header.php';
	
?>
<center><h2>Cadastro de Alimento</h2></center>
<br>
<div class="row">
    <div class="col-md-12">
      <form role="form" action="cadastro_alimento.php" method="POST">
  <input name="acao" type="text" value="add-ator" hidden />
  <input name="codigo" type="text" value="" hidden />
  
  <div class="form-group">
    <label for="nome">
      Nome
    </label>
    <input type="text" class="form-control" name="nome_do_alimento" id="nome" required>
  </div>

  <div class="form-group">
    <label for="nome">
      Vestigios
    </label>
    <input type="text" class="form-control" name="vestigios" id="nome">
  </div>
  
  <div class="form-group">
    <label for="nome_real">
      Aditivos
    </label>
    <input type="text" class="form-control" name="aditivos" id="nome_real">
  </div>
  
  <div class="form-group">
    <label for="dt_nasc">
      Quantidade
    </label>
    <input type="text" class="form-control" name="quantidade" id="dt_nasc">
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