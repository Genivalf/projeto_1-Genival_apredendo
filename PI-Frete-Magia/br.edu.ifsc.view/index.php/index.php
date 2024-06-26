<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <script src=""></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Uma pagiana que ira organizar a sua mundança">
    <link rel="stylesheet" type="text/css" href="../css/Style.css">
    <link rel="stylesheet" type="text/css" href="../css/slide.css">
    <title> Frete Magia </title>
   
</head>

<body>

    <form action="Frete Magia " method="post">
        <header class="cabecalho">
            <img class="cabecalho-logo"src="../img/Logo Frete Magia.svg" alt=" Logo da Frete Magia.">
            <nav class="cabecalho-menu">
               <!-- <a class="cabecalho-menu-item"> Home </a>-->
                <a class="cabecalho-menu-item"> Pagamento </a>
                <a class="cabecalho-menu-item"> Cadastro </a>
                <a class="cabecalho-menu-item"> Contatos </a>
            </nav>
        </header>

        <main classs="conteudo">
            <section class="slider">

                <div class="slider-content">
                    <input type="radio" name="btn-radio"id="radio1">
                    <input type="radio" name="btn-radio"id="radio2">
                    <input type="radio" name="btn-radio"id="radio3">

                    <div class="slide-box primeiro">
                        <img class="img-desktop" src="../img/slide-1.jpg" alt="slide-1"/>
                        <img class="img-mobile" src="../img/slide-1mob.jpg" alt="slide-1mob"/>
                    </div>

                    <div class="slide-box">
                        <img class="img-desktop" src="../img/slide-2.jpg" alt="slide-2"/>
                        <img class="img-mobile" src="../img/slide-2mob.jpg" alt="slide-2mob"/>
                    </div>

                    <div class="slide-box">
                        <img class="img-desktop" src="../img/slide-3.jpg" alt="slide-3"/>
                        <img class="img-mobile" src="../img/slide-3mob.jpg" alt="slide-mob3"/>
                    </div>

                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>

                    <div class="nav-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                    </div>
                </div>
            </section>

            <section class="conteudo-principal">

                <div class="conteudo-principal-escrito">
                
                    <h1 class="conteudo-principal-Frete-Magia" src="">  </h1>
                    <h2 class="conteudo-principal-escrito"> <estrong>Equipe especializada, preço justo e satisfação garantida!</estrong> </h2>
                    <img class="conteudo-line-de-designer" src="Line de designer.svg" alt= "Linha de designe ">
                    <p class="paragrafo-principal-escrito"> A frete magia tem a solução para seus  problemas.
                        Está procurando o melhor frete para sua empresa ou para você temos a 
                        solução.
                    </p>
                </div>   
            </section>

            <section class="conteudo-secundario">
                <div class="conteudo-secundario-escrito">
            
                    <img class="conteudo-secundario-imagem" src="../img/Segunda Imagem.svg" alt=" Segunda imagem da pagina principal">
                    <p class="conteudo-secundario-paragrafo"> Faça sua mudança 
                        residencial ou empresarial 
                        com a frete magia, 
                        aqui você encontra as melhores  equipes em todo  território Brasileiro.  
                    </p>
            
                    <h3 class="conteudo-secundario-escrito"> Contrate os nossos serviços e se surpreenda com a qualidade. </h3>
                    <img class="conteudo-secundario-line-de-designer" src="../img/Segunda line designer.svg line designer.svg" alt= "Segundalinha de designe ">
                    <p class="conteudo-secundario-paragrafo3"> Confira alguns dos nossos parceiro abaixo e contrate o que se encaixa melhor
                        com o que você procura para a sua mudança. 
                    </p>
                </div>
            </section>

            <section class="conteudo-parceiros">
            
                <div  class="conteudo-parceiros-frente-magia">

                    <button class="img_parceiro1">
                        <img class="img_parceiro" src="../img/parceiro-1.jpg" alt=" Imagens dos frete parceiros"/>  
                    </button>

                    <button class="img_parceiro2">
                        <img class="img_parceiro" src="../img/parceiro-2.jpg" alt="Imagens dos frete parceiros"/>
                    </button>

                    <button class="img_parceiro3">
                        <img class="img_parceiro" src="../img/parceiro-3.jpg" alt="Imagens dos frete parceiros"/>
                    </button>
                    
                    <button class="img_parceiro4">
                        <img class="img_parceiro" src="../img/parceiro-4.jpg" alt="Imagens dos frete parcimgeiros"/>
                    </button>
                    
                </div>
            </section>
        </main>

        <footer classs="footer_rodape">
            <section class="section_rodpe">

                <img class="linharodape" src="../img/line rodape.svg" alt="linha de deseigne que separa main do rodape"/>
            
                <p class="p-politica"> POLITICA DE PRIVACIDADE  TERMOS DE USO  LGPD </p>
                <p class="p-copyringth"> Copyright 2024 - Frete Magia </p>
                <img class="logo_roda_pe" src="../img/Logo Frete Magia.svg" alt=" Logo do roda pé">

        </section>
        
        </footer>
        <script src="../js/slide.js"></script>
    </form>

    
    <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-utf8.inc.php";
   require "../includes/criar-tabela.inc.php";

    if(isset($_POST['cadastrar-usuario'])){
      require "../includes/cadastrar-usuario.inc.php";
    }

    if(isset($_POST['pagamentos'])){
      require "../includes/pagamentos.inc.php";
    }
     
    if(isset($_POST['contatos'])){
      require "../includes/contatos.inc.php";
    }

    if(isset($_POST['excluir-usuario'])){
      require "../includes/excluir-usuario.inc.php";
    }

    require "../includes/desconectar.inc.php";  
    ?>
 
</body>
</html>