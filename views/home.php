<br><br><br>
<div class="container">
  <a href="?pagina=gerenciar" role="button" class="btn btn-secondary" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -11px;">Gerenciar</a>
  <a role="button" class="btn btn-light" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -5px;">Adicionar</a>
<div class="card row justify-content-center">
<div class="card-header">
    <div class="col-sm"></div>
    <div class="col-sm">
      <h4 style="text-align: center;">Adicionar respostas prontas</h4>
    </div>
    <div class="col-sm"></div>
</div>
<form action="insere-resposta.php" method="post" style="padding: 2% 5%">

<!-- Categoria -->
<div class="input-group mb-3">
	<div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="categoria_enviada" required>
        <option value="">Selecione uma categoria.</option>
	      <?php
                while($linha = mysqli_fetch_array($consulta_categorias)){
                        echo '<option value="'.$linha['categoria'].'">'.$linha['categoria'].'</option>';
                } 
        ?>
	</select>
</div> <!-- End input group Categoria -->

<!-- Titulo -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
  </div>
  <input name="assunto_enviado" type="text" placeholder="Digite o titulo aqui..." class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div> <!-- End input group Titulo -->

<textarea name="resposta_enviada" style="width:100%;" class="form-control" rows="3" placeholder="Olá, bom dia..." required>
</textarea>


<div class="row justify-content-center" style="padding-top: 20px;">
    <div class="col-4">
      <input type="reset" value="Limpar" class="btn btn-outline-secondary btn btn-block">
    </div>
    <div class="col-4">
      <input type="submit" value="Enviar" class="btn btn-warning btn btn-block" name="recebeFormulario">
    </div>
</div>
</form>