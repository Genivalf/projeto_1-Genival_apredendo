<?php 
//Este include EXCLUI Hrs<100 e Orçamento<R$1000.00:
  $sql = " DELETE FROM $nomeDaTabela WHERE horas_execucao < 100 
  AND orcamento < 1000.00 ";
  
  $resultado = $conexao->query($sql) or die ($conexao->error);

  if($conexao->affected_rows == 0){
    echo "<p> Nem um projeto foi DELETADO, pois não há nem um projeto com HORAS DE EXECUÇÃO
    menor que 100Hrs e ao mesmo tempo com ORÇAMENTO menor que R$1000.00 </p>";
  }
  else{
  
    echo "<p> Foi excluído um total de <span>($conexao->affected_rows) projetos </span> </p>";
  }