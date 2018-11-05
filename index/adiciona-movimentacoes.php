<?php include("home.php");?>
<?php	
	$cpf = $_GET['cpf'];
	$saldo= $_GET['saldo'];
	$numero_da_conta=  $_GET['numero_da_conta'];
    $con = mysqli_connect('localhost','root','','web2');

	$query="insert into web2.conta_corrente (numero_da_conta,saldo,cpf) values({$numero_da_conta},{$saldo},{$cpf})";
	mysqli_query($con, $query);
	mysqli_close($con);
?>
	<p >0s dados da conta  <?= $numero_da_conta ?> foi adicionado.</p>

	<a href="contas.php" class="return" style="font-size: 15px">Retornar</a>
	
<?php include("rodape.php");?>