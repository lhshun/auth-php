<?php include("home.php");?>
	<form class="login" action="adiciona-conta.php">
	<fieldset>	
		<div class="input">		
			<input type="int" placeholder="CPF" name="cpf" required />
		</div>
		<div class="input">		
			<input type="decimal" placeholder="SALDO" name="saldo" required />
		</div>
		<div class="input">		
			<input type="int" placeholder="NUMERO DA CONTA" name="numero_da_conta" required />
		</div>
	</fieldset>
	
	<button type="submit" class="cadastrar">Cadastrar</button> <br>
		
	</form>
	
	<form class="login" action="valida.php">
	<button type="submit" class="cadastrar">Voltar</button> <br>
	</form>
	
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

	
	$resultado=mysqli_query($con,"select * from web2.conta_corrente");
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