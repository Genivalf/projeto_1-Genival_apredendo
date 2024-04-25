<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/contatos.style.css">

  <title> Contatos Sobre nós </title>
</head>
   
<body>
  <div class="contatos"> 
    <img class="img-contatos" src="../br.edu.ifsc.view/img/img-contatos.jpg" alt="imagemde fundo da pgina contatos">
    <img class="contato-logo" src="../br.edu.ifsc.view/img/Logo Frete Magia.svg" alt="Logo do topo da pagina contatos">
  </div>
  <div>
    <h1>  Seja bem vindos Frete Magia </h1>
    <br>
  </div>

    <form action="Contatos.php" method="post">
      <fieldset>
            <legend>Frete Magia </legend>
            <div>
              <h1> Sobre nossa empresa </h1> 
              <p>
                O nosso objetivo é reunir os 
                principais profissionais 
                e pequenas empresas no ramo de frete 
                de toda região do Brasil
                afim de proporcianar aos 
                clientes a facilidade de escolha
                dos nossos serviços ofertados 
                via internet.
              </p> 
            </div>

            <div>
              <p> Entre em contato com o 
                  administrador do portal</p>

              <label for="Telefone"> Telefone: (48)99650-8547 </label> <br>
              <label for="E-mail"> E-mail: fretemagia@gmail.com.br</label>
            </div>

            <p> Entre em contato conosco: </p> 
            <p> Deixe seus dados abaixo </p>
            <br>
            <div>
              <label class="alinha" ><strong> Nome: </strong> </label>
              <input type="text" name="Nome" id="Nome" autofocus required> <br>

              <label class="alinha"> <strong>Sobre Nome: </strong> </label>
              <input type="text" name="Sobre-Nome" id="Sobre-nome" required> <br>

              <label class="alinha"> <strong>Telefone: </strong> </label> 
              <input type="text" name="telefone" id="telefoe" required> <br>

              <label for="E-mail"> <strong>Seu melhor E-mail: </strong></label>
              <input type="email" name="email" id="email" required> <br> <br>
            </div>

            <div>
              <label for="Deixe-sua-mensagem"> <strong> Deixe sua mensagem aqui: </strong>
            </label>
              <textarea name="texto" id="texto" rows="6" style="widht: 26px;"></textarea> <br>

              <button class="enviar" type="submit"> enviar</button>
            
            </div>
      </fieldset>
   
    </form>
  
</body>
</html>