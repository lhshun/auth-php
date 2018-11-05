<?php include("cabecalho.php");?>
<?php	
	$login = $_GET['login'];
	$senha = $_GET['senha'];
	$nome =  $_GET['nome'];
    $con = mysqli_connect('localhost','root','','web2');

	$query="insert into web2.acesso (nome_do_usuario,senha,login) values('{$nome}','{$senha}','{$login}')";
	mysqli_query($con, $query);
	mysqli_close($con);
?>
	<p class="msg">0 Usuario  <?= $login ?> foi adicionado.</p>

	<a href="index.php" class="return" style="font-size: 15px">Retornar</a>
	
<?php include("rodape.php");?>