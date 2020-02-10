<?php

# Base de dados
include 'includes/config/db.php';

# Cabeçalho
include 'includes/header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else if (!$conexao){
	$pagina = 'errodb';
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'gerenciar': include 'views/gerenciar.php'; break;
	case 'adicionada': include 'views/adicionada.php'; break;
	case 'editar': include 'views/editar.php'; break;
	case 'editada': include 'views/editada.php'; break;
	case 'deletar': include 'views/deletar.php'; break;
	case 'errodb': include 'views/errodb.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'includes/footer.php';
