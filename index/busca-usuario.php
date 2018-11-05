<?php 
$con = mysqli_connect('localhost','root','','web2'); 
function buscaUsuario($con,$login,$senha){
	
	
	$query="select * from web2.acesso where login='{$login}' and senha='{$senha}'";
	$resultado =mysqli_query($con, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
	
}?>