<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Info Dietas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-png" />

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="Cortez Filho">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">

  <style type="text/css">


        td{
          padding: 6px;
        }


.center{
  text-align: center;
}


.mod1{
  padding-right: 50px;
}
  </style>

  </head>
  <body>

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>
          <center>Info Dietas</center>
        </h1>
      </div>
      <nav class="navbar navbar-default" style="background-color: #4B0082;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" style="color: white;">Sair</a></li>

        
          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>
  </div>



<center><h2>Cadastro de Usuário</h2></center>
<br>
<div class="row">
    <div class="col-md-12">
  <input name="acao" type="text" value="add-ator" hidden />
  <input name="codigo" type="text" value="" hidden />
  

<div class="form-group">
    <label for="nome">
      Email:*
    </label>
    <input type="text" class="form-control" name="nome_do_aluno" id="nome" required>
  </div>

  <div class="form-group">
    <label for="nome">
      Senha:*
    </label>
    <input type="text" class="form-control" name="nome_do_aluno" id="nome" required>
  </div>



  <div class="form-group">
    <label for="nome">
      Nome Completo:*
    </label>
    <input type="text" class="form-control" name="nome_do_aluno" id="nome" required>
  </div>
  
  <div class="form-group">
    <label for="nome_real">
      Altura:*
    </label>
    <input type="text" class="form-control" name="cpf" id="nome_real">
  </div>
  
  <div class="form-group">
    <label for="nome_real">
      Peso:*
    </label>
    <input type="text" class="form-control" name="matricula" id="nome_real">
  </div>

  <div class="form-group">
    <label for="nome">
      Idade:*
    </label>
    <input type="num" class="form-control" name="nome_do_aluno" id="nome" required>
  </div>
    
    <div class="form-group">
    <label for="nome">
      objetivo:
    </label>
    <input type="text" class="form-control" name="nome_do_aluno" id="nome" required>
  </div>


  <span style=" font-weight: bold">Doenças:</span>
      <!-- <fieldset data-role="controlgroup">   -->      
            <div class="input-group"> 
              <label class="mod1">
            <input type="checkbox" name="doencas" value="intolerancia"/>Intolerâncias
          </label>
          <label class="mod1">
          <input type="checkbox" name="doencas" value="alergia"/>Alergia
          </label>
          <label class="mod1">
          <input type="checkbox" name="doencas" value="hipertenso"/>Hipertensão
          </label>
          <label class="mod1">
          <input type="checkbox" name="doencas" value="diabetico"/>Diabete      
          </label>  
        <!-- </fieldset> -->
        </div>


    
<a href="index.php">
  <button type="submit" class="btn btn-default">
      Cadastrar
  </button>
</a>
</form>
</div>
</div>


<?php

  	include 'views/footer.php';

?>