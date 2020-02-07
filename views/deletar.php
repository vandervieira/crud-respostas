<?php if(!isset($_GET['deletar'])){ ?>

<!-- Conteudo caso não tenha passado nada no parametro -->

<?php } else {  //------ Abrindo chaves do Else  ?>

<br><br><br>
<div class="container">
  <a href="?pagina=gerenciar" role="button" class="btn btn-secondary" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -11px;">Gerenciar</a>
  <a href="?pagina=home" role="button" class="btn btn-secondary" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -5px;">Adicionar</a>
<div class="card row justify-content-center">
<div class="card-header">
    <div class="col-sm"></div>
    <div class="col-sm">
      <h4 style="text-align: center;">Confirma a remoção da mensagem?</h4>
    </div>
    <div class="col-sm"></div>
</div>
<form action="deleta_resposta.php" method="post" style="padding: 2% 5%">

<?php while($linha = mysqli_fetch_array($consulta_respostas)){ ?> <!-- ###### INICIO WHILE ###### -->
<?php if($linha['id'] == $_GET['deletar']){ ?> <!-- ###### INICIO IF verificacao deletar ###### -->
<input type="hidden" name="id_resposta" value="<?php echo $linha['id']; ?>">
<!-- Categoria -->
<div class="input-group mb-3">
	<div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
        </div>
	    <input class="form-control" type="text" name="categoria_enviada" value="<?php echo $linha['categoria']; ?>" readonly>
</div> <!-- End input group Categoria -->

<!-- Titulo -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
  </div>
  <input name="assunto_enviado" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $linha['titulo']; ?>" readonly>
</div> <!-- End input group Titulo -->

<textarea name="resposta_enviada" style="width:100%;" class="form-control" rows="3" readonly>
<?php echo $linha['resposta']; ?>
</textarea>


<div class="row justify-content-center" style="padding-top: 20px;">
    <div class="col-4">
      <a href="?pagina=gerenciar" class="btn btn-secondary btn btn-block" role="button">Voltar</a>
    </div>
    <div class="col-4">
      <input type="submit" value="Deletar" class="btn btn-danger btn btn-block" name="recebeFormulario">
    </div>
</div>

</form>
<?php } ?> <!-- ###### FIM IF verificacao deletar ###### -->
<?php } // ###### FIM DO WHILE #####?>
<?php 
}  //------ Fechando chaves do Else 

