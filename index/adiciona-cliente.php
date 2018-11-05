<?php include("home.php");?>
<?php	
	$cpf = $_GET['cpf'];
	$nome = $_GET['nome'];
	$profissao =  $_GET['profissao'];
    $con = mysqli_connect('localhost','root','','web2');

	$query="insert into web2.cliente (nome,profissao,cpf) values('{$nome}','{$profissao}',{$cpf})";
	mysqli_query($con, $query);
	mysqli_close($con);
?>
	<p >0 Cliente  <?= $nome ?> foi adicionado.</p>

	<a href="clientes.php" class="return" style="font-size: 15px">Retornar</a>
	
<?php include("rodape.php");?>