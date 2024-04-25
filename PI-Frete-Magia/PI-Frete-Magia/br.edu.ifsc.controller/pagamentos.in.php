<?php 
//Este include determina as entradas do ID e ORÇAMENTO:
$sql = " SELECT id , orcamento FROM $nomeDaTabela ";

$resultado = $conexao->query($sql) or die ($conexao->error);

if($conexao->affected_rows == 0){
  echo "<p> Caro, usuario não foi encontrado nenhum registro en noss banco de dados!";
}
else{
   echo "<table>
        <caption> Listar o ID e o ORÇAMENTO de cada projeto </caption>
          <tr>
            <th> ID </th>
            <th> ORÇAMENTO </th>
          </tr>";
            
 while($vetorRegistro = $resultado->fetch_array()){

   $listarIdProjeto = htmlentities($vetorRegistro[0], ENT_QUOTES, "utf-8");
   $listarOrcamento = htmlentities($vetorRegistro[1], ENT_QUOTES, "utf-8");

   echo"<tr>
        <td> $listarIdProjeto </td>
        <td> $listarOrcamento </td>
      </tr>";
  }
  echo "</table>"; 
}