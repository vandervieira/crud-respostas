<br><br><br>
<div class="container">
  <a role="button" class="btn btn-light" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -11px;">Gerenciar</a>
  <a href="?pagina=home" role="button" class="btn btn-secondary" style="font-weight: font-size: 10px; padding: 0 15px; border-radius: 8px 8px 0 0; margin-left: -5px;">Adicionar</a>
<div class="card row justify-content-center">
<div class="card-header">
    <div class="col-sm"></div>
    <div class="col-sm">   
      <h4 style="text-align: center;">Gerenciar respostas prontas</h4>
    </div>
    <div class="col-sm"></div>
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
        while($linha = mysqli_fetch_array($consulta_respostas)){
                        echo '<tr><td style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">'.$linha['categoria'].'</td>';
                        echo '<td>'.$linha['titulo'].'</td>';
    ?>
    <td style="text-align: center;"><a href="?pagina=editar&editar=<?php echo $linha['id']; ?>">Editar</a></td>
    <td style="text-align: center;"><a href="?pagina=deletar&deletar=<?php echo $linha['id']; ?>">Deletar</a></td></tr>          
    <?php
        }
    ?>

     <!-- |||||||| TERMINA UMA LINHA ||||||||| -->
</tbody>

</table>

</div><!-- end card -->
</div> <!-- end container -->