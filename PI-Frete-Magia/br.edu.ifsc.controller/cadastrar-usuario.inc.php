<?php

 /*$id =  $_POST['id'];
 $orcamento =  $_POST['orcamento']; 
 $dataInicio =  $_POST['data-inicio'];
 $horasExecucao =  $_POST['horas-execucao'];*/

 $id = $conexao->escape_string(trim($_POST["id"]));

$orcamento = $conexao->escape_string(trim($_POST["orcamento"]));

$dataInicio = $conexao->escape_string(trim($_POST["data-inicio"]));

$horasExecucao = $conexao->escape_string(trim($_POST["horas-execucao"]));


 $sql = " INSERT $nomeDaTabela VALUES(
                 '$id', 
                  $orcamento, 
                 '$dataInicio',
                  $horasExecucao)";

 $conexao->query($sql) or die($conexao->error);
 
 echo "<p> Usuario cadastrados com sucesso! </p>";