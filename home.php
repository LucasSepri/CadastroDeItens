<meta charset="utf-8">
<?php
include('conexao.php');
Proteger();
?>
<h1> Bem Vindo <?php echo $_SESSION['nome'];?></h1>
<?php
include('menu.php');
?>