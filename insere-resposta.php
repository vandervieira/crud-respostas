<?php
# Base de dados
include 'includes/config/db.php';

$meuForm = $_SERVER['PHP_SELF'];

//Se o formulario não veio vazio
if (!empty($_POST['recebeFormulario'])) {
    
    $categoria = addslashes($_POST['categoria_enviada']);
    $assunto   = addslashes($_POST['assunto_enviado']);
    $resposta  = addslashes($_POST['resposta_enviada']);
    
    $query = "INSERT INTO `respostas` (`data_inserido`, `categoria`, `titulo`, `resposta`) VALUES (CURRENT_TIMESTAMP(), '$categoria', '$assunto', '$resposta')";
    
    //Se conseguiu adicionar a resposta no banco
    if (mysqli_query($conexao, $query)) {
    	header('location:index.php?pagina=adicionada');
    } else {
    printf("Error message: %s\n", mysqli_error($conexao));
    }
}
?>
