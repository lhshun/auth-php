<!-- ?php include("conecta.php");
include("banco-usuario.php");

$login = $_GET['login'];
	$senha = $_GET['senha'];
	$nome =  $_GET['nome']; 
	
    
$usuario = buscaUsuario($con,$_POST['&login'],$_POST['&senha']);
var_dump($usuario);
-->

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "web2";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db ($conexao,"web2") or die (mysqli_error());
?>

<html>

<head>
<title>autenticacao</title>
<script type="text/javascript">
function loginsuccessfully(){
	setTimeout("window.location='site.php'",5000);
	}

function loginfailed(){
	setTimeout("window.location='index.php'",5000);
	}
</script>	
</head>

<body>
<?php
$login=$_POST ['login'];
$senha=$_POST ['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM acesso WHERE login = '$login' and senha = '$senha'") or die(mysqli_error());
$row = mysqli_num_rows($sql);
if($row > 0){
	session_start();
	$_SESSION['login']=$_POST['login'];
	$_SESSION['senha']=$_POST['senha'];
	header('Location: valida.php');
}else{
	header('Location: erro.php');
	}   
?>
</body>