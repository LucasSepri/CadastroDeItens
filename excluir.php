<?php
include('conexao.php');

if(isset($_GET['id'])){
	ExcluirConta($_GET['id']);
}