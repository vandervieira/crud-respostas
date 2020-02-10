<?php if (!isset($_GET['editar'])) { ?>

  <!-- Conteudo caso não tenha passado nada no parametro -->

<?php } else {  //------ Abrindo chaves do Else  
  ?>

  <br><br><br>
  <div class="container" style="padding: 2% 2%;">
    <a href="?pagina=gerenciar" role="button" class="btn" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 13px;">Gerenciar</a>
    <a href="?pagina=home" role="button" class="btn btn-secondary" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 -5px;">Adicionar</a>

    <div class="myCard" style="background-color: white;border-radius: 15px;">
      <div class="myCardTitle" style="padding: 1% 1%; border-bottom: 1px solid rgba(0,0,0,.125);">
        <h4 style="text-align: center;">Editar respostas prontas</h4>
      </div>

      <form action="edita-resposta.php" method="post" style="padding: 2% 5%">

        <?php while ($linha = mysqli_fetch_array($consulta_respostas)) { ?>
          <!-- ###### INICIO WHILE ###### -->
          <?php if ($linha['id'] == $_GET['editar']) { ?>
            <!-- ###### INICIO IF verificacao editar ###### -->
            <input type="hidden" name="id_resposta" value="<?php echo $linha['id']; ?>">
            <!-- Categoria -->
            <div class="input-group" style="padding-bottom: 1%;">
              <span class="input-group-addon">Categoria</span>

              <input class="form-control" type="text" name="categoria_enviada" value="<?php echo $linha['categoria']; ?>" required>
            </div>
            <!-- End input group Categoria -->

            <!-- Titulo -->

            <div class="input-group" style="padding-bottom: 1%;">
              <span class="input-group-addon">Titulo</span>
              <input name="assunto_enviado" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $linha['titulo']; ?>" required>
            </div>
            <!-- End input group Titulo -->

            <textarea name="resposta_enviada" style="width:100%;" id="summernote" class="form-control" rows="3" required>
<?php echo $linha['resposta']; ?>
</textarea>

            <!-- inicio botoes -->
            <div class="row">
              <div class="col-xs-6" style="padding: 0 50px;">
                <a href="?pagina=gerenciar" style="color: inherit;">
                  <button type="button" class="btn btn-block">Voltar</button>
                </a>
              </div>
              <div class="col-xs-6" style="padding: 0 50px;">
                <input type="submit" value="Enviar" class="btn btn-warning btn-block" name="recebeFormulario">
              </div>
            </div>
            <!-- End Botoes -->

      </form>
    </div>
  </div>
<?php } ?>
<!-- ###### FIM IF verificacao editar ###### -->
<?php } // ###### FIM DO WHILE #####
  ?>
<?php
}  //------ Fechando chaves do Else 
