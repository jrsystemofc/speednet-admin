<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<div class="container">
	  <div class="abs-center">
	    <form action="src/php/login.php" method="POST" class="form-login shadow">
	    	<div class="row">
	    			<div class="col-md-6 px-5 py-4">
	    			<h4 style="color: #8052cc;">LOGIN</h4><br><br><br>
		    		<div class="form-group">
				       <label for="email" style="color: #8f8f8f;">Usuário</label>
				       <input type="email" name="email" id="email" class="form-control">
		     		</div>
				    <div class="form-group">
				       <label for="password" style="color: #8f8f8f;">Senha</label>
				       <input type="password" name="senha" id="password" class="form-control">
				    </div>
				    <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1" >Lembrar senha</label>
					  </div>
				    <div class="container-fluid text-center">
				    	<button style="background-color: #da71ce;color: #fff;padding: 0.5em 7em" type="submit" class="btn btn-md text-center mt-2">Sign in</button>
				    	<p style="font-size: 10pt;">Não possui uma conta? <a href="#">Cadastre-se</a></p>
				    </div>
	    		</div>
		      	<div class="col-md-6">
		      		<div class="form-img">
		      			
		      		</div>
		      	</div>	    		
	    	</div>	    	
	    </form>
	    <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>