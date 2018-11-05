<html>
<head>
	<link href="css/login.css" rel="stylesheet" >
</head>
<body>


             
<form class="login" method="post" action="login.php">
	<fieldset>
	
	<legend class="legend">Bem Vindo</legend>	
	
	<div class="input">
		<input type="text" placeholder="Usuario" name="login" required />
		<span><i class="fa fa-envelope-o"></i></span>
	</div>

	<div class="input">
		<input type="password" placeholder="Senha" name="senha" required />
		<span><i class="fa fa-lock"></i></span>
	</div>
	
	<button type="submit" class="submit">Logar</button>
	
	
	</fieldset>
	
	</form>
	
<a href="cadastro-user.php" class="cadastro"> Cadastre-se</a>
	
	
</body>	
</html>