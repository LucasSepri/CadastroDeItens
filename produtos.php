<meta charset="utf-8">
<?php
include('conexao.php');
include('menu.php');

if($_POST){
	CriarProduto($_POST['nome'],$_POST['descricao'],$_POST['valor'],$_POST['categoria'],$_FILES['foto']);
}
?>
<form method="post" enctype="multipart/form-data">
	Nome do Produto:
	<input type="text" name="nome">
	<br>
	Valor do Produto:
	<input type="text" name="valor">
	<br>
	Descrição<br>
	<textarea name="descricao"></textarea>
	<br>
	Categoria:
	<select name="categoria">
		<option>Selecione..</option>
		<?php
		$todas = ListarCategorias();
		while($cat = $todas->fetch_object()){
		echo '<option value="'.$cat->cd.'">';
		echo $cat->nome;
		echo '</option>';
		}	
		?>
	</select>
	<br>
	Foto do Produto:
	<input type="file" name="foto"><br>
	<br>
	<button>Cadastrar</button>
</form>

<hr>
<table>
	<thead>
		<tr><td>#Cód</td>
			<td>#Nome</td>
			<td>#Desc</td>
			<td>#Valor</td>
			<td>#Foto</td>
			<td>#Categoria</td>
			<td>#</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$todas = ListarProdutos();
			while($cat = $todas->fetch_object()){	
			echo '<tr>
					<td>'.$cat->cd.'</td>
					<td>'.$cat->nome.'</td>
					<td>'.$cat->descricao.'</td>
					<td>'.$cat->valor.'</td>
					
					<td>
					<img src="'.$cat->foto.'" style="height:5vh;"></td>
					<td>'.$cat->cat.'</td>	
					<td>#</td>			
				  </tr>';		
			}
		?>
	</tbody>
</table>