<br><br><br>
<div class="container">
  <a role="button" class="btn btn-light" style="background-color: white; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 13px;">Gerenciar</a>
  <a href="?pagina=home" role="button" class="btn btn-secondary" style="background-color: grey; color: inherit; font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin: 0 0 0 -5px;">Adicionar</a>
  <div class="myCard" style="background-color: white;border-radius: 15px;">


    <div class="myCardTitle" style="padding: 1% 1%; border-bottom: 1px solid rgba(0,0,0,.125);">
      <h4 style="text-align: center;">Gerenciar respostas prontas</h4>
    </div>
    <table class="table table-hover table-striped" id="respostas-table">
      <thead>
        <tr>
          <th>Categoria</th>
          <th>Titulo</th>
          <th>Editar</th>
          <th>Deletar</th>
        </tr>
      </thead>
      <tbody>
        <!-- |||||||| COMEÇA UMA LINHA ||||||||| -->
        <?php
        while ($linha = mysqli_fetch_array($consulta_respostas)) {
          echo '<tr><td style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">' . $linha['categoria'] . '</td>';
          echo '<td>' . $linha['titulo'] . '</td>';
          ?>
          <td style="text-align: center;"><a href="?pagina=editar&editar=<?php echo $linha['id']; ?>">Editar</a></td>
          <td style="text-align: center;"><a href="?pagina=deletar&deletar=<?php echo $linha['id']; ?>">Deletar</a></td>
          </tr>
        <?php
        }
        ?>

        <!-- |||||||| TERMINA UMA LINHA ||||||||| -->
      </tbody>

    </table>

  </div><!-- end card -->
</div> <!-- end container -->