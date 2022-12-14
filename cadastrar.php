<?php
include('conexao.php');
if($_POST){
	CriarConta($_POST['user'],$_POST['email'],$_POST['senha']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	<meta charset="utf-8">
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
	<div class="container">
		 <div class="row meio">
		    <div class="col s6 offset-s3 m6 offset-m3">
		      <div class="card">
		        <div class="card-content login">
		          <span class="card-title center">Bem vindo ao Projeto!</span>
			          <form class="form white-text" method="post">
			          	<div class="row">
				          	<div class="input-field col s12">
					          <input id="user" name="user" type="text" class="validate">
					          <label for="user">Usuário</label>
					        </div>
				        </div>
				        <div class="row">
				          	<div class="input-field col s12">
					          <input id="email" name="email" type="email" class="validate">
					          <label for="email">Usuário</label>
					        </div>
				        </div>
			          	<div class="row">
				          	<div class="input-field col s12">
					          <input id="senha" name="senha" type="password" class="validate">
					          <label for="senha">Senha</label>
					        </div>
				        </div>
				        <div class="row">
				        	<button class="btn">Cadastrar</button>
				        </div>
			          </form>
		        </div>
		        <div class="card-action">
		        	<a href="#">Esqueceu a senha?</a>
		          	<a href="index.php" style="float:right">Já sou cadastrado!</a>		          
		        </div>
		      </div>
		    </div>
		  </div>
	</div>	
</body>
</html>