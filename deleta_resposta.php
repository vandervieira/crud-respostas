<?php
# Base de dados
include 'includes/config/db.php';

//Se o formulario não veio vazio
if (!empty($_POST['recebeFormulario'])) {

$id_resposta = $_POST['id_resposta'];

$query = "DELETE FROM respostas WHERE id='$id_resposta'";

    //Se conseguiu adicionar a resposta no banco
    if (mysqli_query($conexao, $query)) {
    	header('location:index.php?pagina=gerenciar');
    } else {
    printf("Error message: %s\n", mysqli_error($conexao));
    }
}
