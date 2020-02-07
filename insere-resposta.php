<?php
# Base de dados
include 'includes/config/db.php';

$meuForm = $_SERVER['PHP_SELF'];

//Se o formulario não veio vazio
if (!empty($_POST['recebeFormulario'])) {
    
    $categoria = $_POST['categoria_enviada'];
    $assunto   = $_POST['assunto_enviado'];
    $resposta  = $_POST['resposta_enviada'];
    
    $query = "INSERT INTO `respostas` (`categoria`, `titulo`, `resposta`) VALUES ('$categoria', '$assunto', '$resposta')";
    
    //Se conseguiu adicionar a resposta no banco
    if (mysqli_query($conexao, $query)) {
    	header('location:index.php?pagina=adicionada');
    } else {
    printf("Error message: %s\n", mysqli_error($conexao));
    }
}
?>