<?php if (!isset($_GET['deletar'])) { ?>

  <!-- Conteudo caso não tenha passado nada no parametro -->

<?php } else {  //------ Abrindo chaves do Else  
  ?>

  <br><br><br>
  <div class="container">
    <a href="?pagina=gerenciar" role="button" class="btn" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 13px;">Gerenciar</a>
    <a href="?pagina=home" role="button" class="btn btn-secondary" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 -5px;">Adicionar</a>

    <div class="myCard" style="background-color: white;border-radius: 15px;">
      <div class="myCardTitle" style="padding: 1% 1%; border-bottom: 1px solid rgba(0,0,0,.125);">
        <h4 style="text-align: center;">Confirma a remoção da mensagem?</h4>
      </div>
      <form action="deleta_resposta.php" method="post" style="padding: 2% 5%">

        <?php while ($linha = mysqli_fetch_array($consulta_respostas)) { ?>
          <!-- ###### INICIO WHILE ###### -->
          <?php if ($linha['id'] == $_GET['deletar']) { ?>
            <!-- ###### INICIO IF verificacao deletar ###### -->
            <input type="hidden" name="id_resposta" value="<?php echo $linha['id']; ?>">
            <!-- Categoria -->
            <div class="input-group" style="padding-bottom: 1%;">
              <span class="input-group-addon" style="font-weight: bold;"> Categoria</span>

              <input class="form-control" type="text" name="categoria_enviada" value="<?php echo $linha['categoria']; ?>" readonly>
            </div>
            <!-- End input group Categoria -->

            <!-- Titulo -->
            <div class="input-group" style="padding-bottom: 1%;">
              <span class="input-group-addon" style="font-weight: bold;"> Categoria</span>
              <input name="assunto_enviado" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $linha['titulo']; ?>" readonly>
            </div>
            <!-- End input group Titulo -->

            <textarea name="resposta_enviada" style="width:100%;" class="form-control" rows="3" readonly>
<?php echo $linha['resposta']; ?>
</textarea>

            <!-- inicio botoes -->
            <div class="row">
              <div class="col-xs-6" style="padding: 0 50px; padding-top: 20px;">
                <a href="?pagina=gerenciar" style="color: inherit;">
                  <button type="button" class="btn btn-block">Voltar</button>
                </a>
              </div>
              <div class="col-xs-6" style="padding: 0 50px; padding-top: 20px;">
                <input type="submit" value="Deletar" class="btn btn-danger btn btn-block" name="recebeFormulario">
              </div>
            </div>
            <!-- End Botoes -->


    </div>
  </div>

  </form>
<?php } ?>
<!-- ###### FIM IF verificacao deletar ###### -->
<?php } // ###### FIM DO WHILE #####
  ?>
<?php
}  //------ Fechando chaves do Else 
