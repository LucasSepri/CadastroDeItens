<?php
include("conexao.php");
//cd	nome descricao	valor	foto	Cd_categoria

if(isset($_GET['acao'])){

if(isset($_GET['exibir'])){
$sql = 'SELECT * FROM produto WHERE cd ='.$_GET['exibir'];
$res = $con->query($sql);

$produto = $res->fetch_object();
echo json_encode($produto);
	
}

}
