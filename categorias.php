<meta charset="utf-8">
<?php
include('conexao.php');
include('menu.php');
if($_POST){
	CriarCategoria($_POST['nome'],$_FILES['foto']);
}
?>
<form method="post" enctype="multipart/form-data">
	Nome: <input type="text" name="nome">
	<br>
	Foto: <input type="file" name="foto">
	<br>
	<button>Cadastrar</button>
</form>
<hr>
<table>
	<thead>
		<tr><td>#cód</td>
			<td>#Nome</td>
			<td>#Foto</td>
			<td>#</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$todas = ListarCategorias();
			while($cat = $todas->fetch_object()){	
			echo '<tr>
					<td>'.$cat->cd.'</td>
					<td>'.$cat->nome.'</td>
					<td>
					<img src="'.$cat->foto.'" style="height:5vh;"></td>
					<td>#</td>
				  </tr>';		
			}
		?>
	</tbody>
</table>