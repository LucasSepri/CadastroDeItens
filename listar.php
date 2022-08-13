<meta charset="utf-8">
<?php
include('conexao.php');

$registros = ListarContas();

echo '<h1>Total: '.$registros->num_rows.'</h1>';
echo '<hr>';
?>
<table>
	<thead>
		<tr>
			<td>Cód</td>
			<td>Nome</td>
			<td>Email</td>
			<td>#</td>
		</tr>
	</thead>
	<tbody>
		<?php
		while($user = $registros->fetch_array()){
		
		echo '<tr>
			<td>'.$user['cd'].'</td>
			<td>'.$user['nome'].'</td>
			<td>'.$user['email'].'</td>
			<td>
			<a href="excluir.php?id='.$user['cd'].'">
			Excluir
			</a>
			</td>
		</tr>';
		}
		?>
	</tbody>
</table>