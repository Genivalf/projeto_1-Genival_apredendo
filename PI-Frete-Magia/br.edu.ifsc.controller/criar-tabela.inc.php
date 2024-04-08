<?php
 //Neste include, cria-se uma tabela no modelo:
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id VARCHAR(20) PRIMARY KEY ,
          orcamento DECIMAL(10 , 2),
          data_inicio VARCHAR(200),
          horas_execucao INT (20))";

 $conexao->query($sql) or exit($conexao->error);