<?php include("cabecalho.php");?>
	<form class="login" action="adiciona-user.php">
	<fieldset>	
		<div class="input">		
			<input type="text" placeholder="Nome" name="nome" required/>
		</div>
		<div class="input">		
			<input type="text" placeholder="Usuario" name="login" required/>
		</div>
		<div class="input">		
			<input type="password" placeholder="Senha" name="senha" required/>
		</div>
	</fieldset>
	
	<button type="submit" class="cadastrar">Cadastrar</button> <br>
		
	</form>
	
	<a href="index.php" class="return" style="font-size: 15px">Retornar</a>
	



<?php include("rodape.php");?>