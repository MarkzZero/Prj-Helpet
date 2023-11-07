<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Helpet</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!-- Home -->
        <section id="home">

            <header>
                <nav>
                    <div class="menu-btn">
                        <i class="fi fi-br-menu-burger" onclick="menuShow()"></i>
                    </div>

                    <div class="logo">
                        <a href="#"><img src="images/logo-branca.png"></a>
                    </div>

                    <div class="area-links">
                        <ul class="nav-list">
                            <li><a href="#quem-somos">Quem somos</a></li>
                            <hr class="hr-menu">
                            <li><a href="#servicos">Serviços</a></li>
                            <hr class="hr-menu">
                            <li><a href="#beneficios">Benefícios</a></li>
                            <hr class="hr-menu">
                            <li><a href="#fale-conosco">Fale conosco</a></li>
                        </ul>

                        <div class="area-btn-ong">
                            <a href="./usuario/index.php">
                                <div class="login-ongs">Adote um pet!</div>
                            </a>
                            <a href="./ong/index.php">
                                <div class="login-ongs">Faça parte ONGs!</div>
                            </a>
                        </div>
                    </div>

                    <div class="pata-home-top">
                        <img src="images/img-home/pata-branca.png">
                    </div>
                </nav>
            </header>

            <div class="conteudo-home">
                <!-- Frase Home -->
                <div class="texto-home">
                    <div>
                        <div class="logo-titulo">
                            <h1>helpet</h1>
                        </div>
                        <div class="frase">
                            <p>O melhor amigo do homem também precisa de um melhor amigo, será que é você?</p>
                        </div>
                    </div>
  
                    <div class="area-saiba-mais">
                        <a href="#quem-somos">
                            <div class="saiba-mais">Saiba Mais</div>
                        </a>
                    </div>
                </div>
  
                <!-- Pets Home -->
                <div class="pets-home">
                  <img src="images/img-home/pets-home.png">
                </div>
            </div>

            <div class="imgs-home-bottom">
                <img class="pata-home-bottom" src="images/img-home/pata-branca.png">
                <img class="patinhas-home" src="images/img-home/patinhas-amarela.png">
            </div>

        </section>


        <!-- Link para o topo -->
        <a id="link-top" href="#"><i class="fi fi-sr-angle-small-up"></i></a>
        
        
        <!-- Quem Somos -->
        <section id="quem-somos">

            <h1 class="titulo">Quem Somos</h1>

            <div id="conteudo-quem-somos">

                <div id="area-gato">
                    <div class="area-laranja">
                        <div class="gato-quem-somos">
                            <img src="images/img-quem-somos/gato-quem-somos.png">
                        </div>
                        <div class="area-texto">
                            <p>Somos uma plataforma focada em unir as ONGs com os possíveis novos tutores.</p>
                        </div>
                    </div>                    
                    <div id="patinhas-esquerda">
                        <img src="images/img-quem-somos/patinhas-azul.png">
                    </div>
                </div>

                <div class="detalhe-quem-somos">
                    <img src="images/img-quem-somos/detalhe.png">
                </div>
                
                <div id="area-cao">                    
                    <div id="patinhas-direita">
                        <img src="images/img-quem-somos/patinhas-azul.png">
                    </div>
                    <div class="area-azul">
                        <div class="cao-quem-somos">
                            <img src="images/img-quem-somos/cao-quem-somos.png">
                        </div>
                        <div class="area-texto">
                            <p>Ajudando assim as ONGs a achar um bom lar para os pets e ajudando você a encontrar um novo amiguinho.</p>
                        </div>
                    </div> 
                </div>

            </div>

        </section>

        <!-- Serviços -->
        <section id="servicos">
            <h1 class="titulo">Nossos Serviços</h1>

            <div class="area-servicos">
            
                <div class="colunas">

                    <div class="area-card">
                        <div id="cao-servicos">
                            <img src="images/img-serviços/serv-fundo-cachorro.png">
                        </div>
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-adocao.png">
                            <h3>Adoção</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Facilitamos a visualização de pets disponíveis para adotar.</p>
                        </div>
                    </div>

                    <div class="area-card">
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-comunicacao.png">
                            <h3>Comunicação</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Fornecemos um chat para os possíveis tutores tirarem dúvidas.</p>
                        </div>
                    </div>
    
                    <div class="area-card">
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-conscientizacao.png">
                            <h3>Conscientização</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Detalhamos a importância da adoção de animais.</p>
                        </div>
                    </div>

                    <div class="area-card">
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-campanhas.png">
                            <h3>Campanhas</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Gerenciamos ideias para diminuir os animais abandonados nas ruas.</p>  
                        </div>
                    </div>
    
                    <div class="area-card">
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-vacinas.png">
                            <h3>Vacinas</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Mostramos as vacinas necessárias para cada pet.</p>
                        </div>
                    </div>

                    <div class="area-card">
                        <div class="serv-subtitulo">
                            <img src="images/img-serviços/serv-suporte.png">
                            <h3>Suporte</h3>
                        </div>
                        <div class="serv-texto">
                            <p>Garantimos que os animais sejam bem cuidados.</p>
                        </div>
                    </div>

                </div>

                <div id="gato-servicos">
                    <img src="images/img-serviços/serv-fundo-gato.png">
                </div>


            </div>
        </section>


        <!-- Benefícios -->
        <section id="beneficios">
            <h1 class="titulo">Benefícios</h1>

            <div class="area-beneficios">

                <div class="row">

                    <div id="card-laranja" class="card">

                        <h2>Adote um pet e ganhe um amigo</h2>

                        <div id="benef-patinhas">
                            <img src="images/img-beneficios/card-laranja/patinhas-branca.png">
                        </div>
                        <div class="area-img">
                            <img src="images/img-beneficios/card-laranja/fundo-card-laranja.png">
                            <p>Ajudamos os animais que estão abandonados nas ruas.</p>
                        </div>

                        <div class="conteudo-cards">

                            <div class="secao">
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-laranja/img-chat.png">
                                </div>
                                <div class="secao-div-texto">
                                    <p>Fornecemos um chat para obter mais informações e discutir detalhes antes de adotar.</p>
                                </div>
                            </div>

                            <div class="secao">
                                <div class="secao-div-texto">
                                    <p>Divulgamos campanhas, vacinas e serviços veterinários para os pets.</p>
                                </div>
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-laranja/img-campanhas.png">
                                </div>
                            </div>

                            <div class="secao">
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-laranja/img-cuidados.png">
                                </div>
                                <div class="secao-div-texto">
                                    <p>Garantimos cuidados adequados aos animais e um canal de suporte contínuo.</p>
                                </div>
                            </div>

                            <br>

                            <div class="cadastro">
                                <h3>Cadastre-se nesse sistema</h3>
                                <div class="area-img">
                                    <img src="images/img-beneficios/card-laranja/img-adotar.png">
                                </div>
                                <div class="area-btn-cadastro">
                                    <a href="./usuario/index.php">
                                        <div class="btn-cadastro">Adote um pet!</div>
                                    </a>
                                </div>
                            </div>

                            <br>
                        </div>

                        <div class="area-seta">
                            <div class="read_button">
                                <i class="fi fi-sr-angle-small-down"></i>
                            </div>
                        </div>

                    </div>

                    <div class="area-pets">
                        <div id="benef-gato">
                            <img src="images/img-beneficios/gato-beneficios.png">
                        </div>
                        <div id="benef-cao">
                            <img src="images/img-beneficios/cao-beneficios.png">
                        </div>
                    </div>

                    <div id="card-azul" class="card">
                        <h2>Nós te ajudamos a ajudar os pets</h2>
                        <div id="benef-patinhas">
                            <img src="images/img-beneficios/card-azul/patinhas-amarela2.png">
                        </div>
                        <div class="area-img">
                            <img src="images/img-beneficios/card-azul/fundo-card-azul.png">
                            <p>Facilitamos o processo de adoção dos animais.</p>
                        </div>

                        <div class="conteudo-cards">

                            <div class="secao">
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-azul/img-visibilidade.png">
                                </div>
                                <div class="secao-div-texto">
                                    <p>Aumentamos a visibilidade dos pets das instituições cadastradas no nosso sistema.</p>
                                </div>
                            </div>

                            <div class="secao">
                                <div class="secao-div-texto">
                                    <p>Conscientizamos a importância da adoção responsável dos animais de estimação.</p>
                                </div>
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-azul/img-conscientizacao.png">
                                </div>
                            </div>

                            <div class="secao">
                                <div class="secao-div-img">
                                    <img src="images/img-beneficios/card-azul/img-comunicacao.png">
                                </div>
                                <div class="secao-div-texto">
                                    <p>Facilitamos a comunicação com os possíveis tutores e o processo para adotar.</p>
                                </div>
                            </div>

                            <br>

                            <div class="cadastro">
                                <h3>Cadastre-se nesse sistema</h3>
                                <div class="area-img">
                                    <img src="images/img-beneficios/card-azul/img-sistema.png">
                                </div>
                                <div class="area-btn-cadastro">
                                    <a href="./ong/index.php">
                                        <div class="btn-cadastro">Faça Parte ONGs!</div>
                                    </a>
                                </div>
                            </div>    
                            
                            <br>
                        </div>

                        <div class="area-seta">
                            <div class="read_button">
                                <i class="fi fi-sr-angle-small-down"></i>
                            </div>
                        </div>
                    
                    </div>
                
                </div>
                
            </div>
            
        </section>

        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Anunciantes -->
        <section id="anunciantes">
        <h1 class="titulo">Anunciantes</h1>
          <div class="img-anunciante">
            <img src="images/img-beneficios/img-anunciante.png" alt="">
          </div> 
          
          <div class="desc-anunciante">
            <p>Conosco os anunciantes como PetShops, veterinários, Banho&Tosa, entre outros serviços que poderão entrar em contato com o nosso sistema e 
               poderão anunciar seus produtos na plataforma e realizar parcerias com as ongs cadastradas.</p>
          </div>

            <div class="botoes-contato-anunci">
             <a class="link" href="#fale-conosco">
                <button name="Enviar">
                    <span>Contato</span>
                    <!-- <ion-icon name="bookmark-outline"></ion-icon> -->
                </button>
             </a>   
            </div>
        </section>


        <!-- Fale Conosco -->
        <section id="fale-conosco">
            <div class="pata-azul-esquerda">
                <img src="images/img-fale-conosco/pata-azul.png">
            </div>
            
            <div class="area-fale-conosco">
                <div class="secao">
        
                    <div class="secao-form">
                        <div class="area-texto">
                            <h1>Fale Conosco</h1>
                            <p>
                                Entre em contato para esclarecer dúvidas, 
                                enviar sugestões ou críticas sobre nosso projeto.
                            </p>
                        </div>
            
                        <form method="POST" action="./forms/contato.php">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" id="nome" class="form-control" placeholder="Nome" name="Nome">
                                </div>
                                <div class="col">
                                    <input type="email" id="email" class="form-control" placeholder="E-mail" name="Email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensagem" name="Mensagem"></textarea>
                            </div>

                            <div class="botoes-contato">
                                <button name="Enviar">
                                    <span>Enviar</span>
                                    <i class="fi fi-sr-paw"></i>
                                </button>
            
                                <div class="icones-contato">
                                    <i id="icon-phone" class="fi fi-sr-circle-phone"></i>
                                    <i id="icon-email" class="fi fi-sr-circle-envelope"></i>
                                </div>
                            </div>
                        </form>
                    </div>
               
                    <div class="secao-img">
                        <img src="images/img-fale-conosco/fale-conosco.png">
                    </div>

                </div>
           
            </div>
            
            <div class="pata-azul-direita">
                <img src="images/img-fale-conosco/pata-azul.png">
            </div> 
         
        </section>
        
        
        <!-- Rodapé -->
        <footer id="rodape">
            <div class="area-rodape">
                <p>©2023. Copyright | IMAGINE</p>
                <p><a href="./adm/index.php">ADM</a></p>
                <p>Termos de Uso | Política de Privacidade</p>
            </div>
        </footer>


        <!-- Links JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
