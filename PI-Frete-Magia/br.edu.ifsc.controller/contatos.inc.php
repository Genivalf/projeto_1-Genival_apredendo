<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contatos Sobre nós </title>
</head>

<body>
  
</body>
</html>


<?php 
  //Este include mostrará o número de projetos cadastrados com data após 01-01-20:

 $sql = " SELECT COUNT(*) FROM $nomeDaTabela WHERE data_inicio > '2020-01-01' ";

 //$sql = " SELECT id, data_inicio FROM $nomeDaTabela WHERE data_inicio > '2020-01-01' ";
  $resultado = $conexao->query($sql) or die ($conexao->error);

  $vetorRegistro = $resultado->fetch_array();

  $numeroDeProjeto = $vetorRegistro[0];

  if($numeroDeProjeto == 0 ){
    exit ("<p> Não há nem um projeto cadastrado após 01-01-2020 </p>");
  }
  else{
    echo"<p> O número de Projetos cadastrados após 01-01-2020 são: $numeroDeProjeto </p>";
  }