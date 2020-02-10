<?php
$conexao = mysqli_connect("HOST", "USER", "PASSWORD", "DB");
mysqli_set_charset($conexao,"utf8");
$query_categorias = "SELECT categoria FROM respostas group by categoria";
$consulta_categorias = mysqli_query($conexao, $query_categorias);
$query_respostas = "SELECT id,categoria,titulo,resposta FROM respostas";
$consulta_respostas = mysqli_query($conexao, $query_respostas);
