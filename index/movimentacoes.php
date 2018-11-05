<?php include("home.php");?>
<table>
        <thead>
          <tr>
              <th>CPF</th>
              <th>SALDO</th>
              <th>NUMERO DA CONTA</th>
          </tr>
        </thead>
		</table>
<?php include("conecta.php");

	
	$resultado=mysqli_query($con,"select * from web2.movimentacao");
	 echo "<table>\n";
	
while($cliente = mysqli_fetch_assoc($resultado)){	
	echo "<tr>\n";
	echo "<td>".$cliente['cpf']."</td>\n";
	echo"<td>". $cliente['saldo']."</td>\n";
	echo"<td>". $cliente['numero_da_conta']."</td>\n";
	echo "</tr>\n";
	
}
 echo "</table>\n"; 

?>
	



<?php include("rodape.php");?>