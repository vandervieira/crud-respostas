<br><br><br>
<div class="container" style="padding: 2% 2%;">
  <a href="?pagina=gerenciar" role="button" class="btn" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 13px;">Gerenciar</a>
  <a role="button" class="btn" style="background-color: white; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 -5px;">Adicionar</a>

  <div class="myCard" style="background-color: white;border-radius: 15px;">
    <div class="myCardTitle" style="padding: 1% 1%; border-bottom: 1px solid rgba(0,0,0,.125);">
      <h3 style="text-align: center;">Adicionar respostas prontas</h3>
    </div>
    <form action="insere-resposta.php" method="post" style="padding: 2% 3%;">

      <!-- Categoria -->
      <div class="input-group" style="padding-bottom: 1%;">
        <span class="input-group-addon">Categoria</span>

        <select class="form-control" name="categoria_enviada" required>
          <option value="">Selecione uma categoria.</option>
          <?php
          while ($linha = mysqli_fetch_array($consulta_categorias)) {
            echo '<option value="' . $linha['categoria'] . '">' . $linha['categoria'] . '</option>';
          }
          ?>
        </select>
      </div>

      <!-- End input group Categoria -->

      <!-- Titulo -->

      <div class="input-group" style="padding-bottom: 1%;">
        <span class="input-group-addon">Titulo</span>
        <input name="assunto_enviado" type="text" placeholder="Digite o titulo aqui..." class="form-control">
      </div>

      <textarea name="resposta_enviada" style="width:100%;" id="summernote" class="form-control" rows="3" placeholder="Oá, bom dia..." required>
</textarea>
      <!-- End Titulo -->

      <!-- inicio botoes -->
      <div class="row">
        <div class="col-xs-6 col-md-4"></div>
        <div class="col-xs-6 col-md-4">
          <input type="submit" value="Enviar" class="btn btn-warning btn-block" name="recebeFormulario">
        </div>
      </div>

      <!-- End Botoes -->


  </div>
  </form>
