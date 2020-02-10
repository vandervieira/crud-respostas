<?php
# Base de dados
include 'includes/config/db.php';

//Se o formulario não veio vazio
if (!empty($_POST['recebeFormulario'])) {

    $id_resposta = addslashes($_POST['id_resposta']);
    $categoria = addslashes($_POST['categoria_enviada']);
    $assunto   = addslashes($_POST['assunto_enviado']);
    $resposta  = addslashes($_POST['resposta_enviada']);
    
    $query = "UPDATE respostas SET categoria='$categoria', titulo='$assunto', resposta='$resposta' WHERE id='$id_resposta'";
    
    //Se conseguiu adicionar a resposta no banco
    if (mysqli_query($conexao, $query)) {
    	header('location:index.php?pagina=gerenciar');
    } else {
    printf("Error message: %s\n", mysqli_error($conexao));
    }
}
?>