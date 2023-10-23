<?php 
    include('protect.php');
    include('./config/config.php');

    if(isset($_GET[1]))
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard da ONG</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">

            <!-- Menu Fixo Lateral -->
            <div class="navegation">
                <div class="toggle">
                    <i class="fi fi-br-menu-burger"></i>
                </div>
                
                <div class="logo">
                    <!-- Puxar do banco a imagem da ong aqui -->
                    <img style="border-radius: 100%;" src="<?php echo "../Cadastro/" . $_SESSION['foto']; ?>">
                    <!-- conectar o nome das ongs com o  banco -->
                    <span class="title-ong">Bem-Vindo <br> <?php echo $_SESSION['nome'];?></span>
                </div>

                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon"><i class="fi fi-sr-chart-line-up"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Pets.php">
                            <span class="icon"><i class="fi fi-rs-paw"></i></span>
                            <span class="title">Pets</span>
                        </a>
                    </li>
                    <li>
                        <a href="Campanhas.php">
                            <span class="icon"><i class="fi fi-rr-megaphone"></i></span>
                            <span class="title">Campanhas</span>
                        </a>
                    </li>
                    <li>
                        <a href="Chat.php">
                            <span class="icon"><i class="fi fi-rr-messages"></i></span>
                            <span class="title">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fi fi-rr-settings"></i></span>
                            <span class="title">Configurações</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="icon"><i class="fi fi-rr-sign-out-alt"></i></span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>

            </div>

            <!-- CADASTRO DE CAMPANHAS -->
            <div class="main">

                <div class="topbar">
                    <div class="img-pag">
                        <img src="images/pag-campanhas.png">
                    </div>
                    
                    <div class="titulo-pagina">
                        <span>Campanhas</span>
                    </div>

                    <div class="img-logo">
                        <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                    </div>
                </div>

                <br>

                <form action="./Cadastro/cadastro-campanha.php" enctype="multipart/form-data" method="POST">

                    <div class="sub-titulo">
                        <span>Cadastro da Campanha</span>
                    </div>
                    
                    <div id="area-campanha" class="area-cadastro">
                        <div class="area-campos">
                            <div class="campos">

                                <!-- PRIMEIRA COLUNA -->
                                <div id='coluna-campos' class="coluna">
                                    <br>
                                    <div class="campo">
                                        <input type="text" placeholder="Nome da Campanha"  required name="nome" />
                                    </div>
                                    <br>
                                    <div class="campo">
                                        <input type="date" placeholder="Data" required name="data"/>
                                    </div>
                                    <br>
                                    <div class="campo">
                                        <input type="time" placeholder="Horário" required name="horario"/>
                                    </div>

                                    <br>
                                    <div class="campo">
                                    <input type="text" placeholder="CEP" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" maxlength="9" required name="cep" />
                                    </div>
                                    <br>
                                    <div class="campo">
                                        <input type="text" placeholder="Estado" id="uf" name="estado" />
                                    </div>
                                    <br>
                                </div>

                                <!-- SEGUNDA COLUNA -->
                                <div class="coluna">
                                    <br>
                                    <div class="campo">
                                        <input type="text" placeholder="Cidade" id="cidade" required name="cidade"/>
                                    </div>
                                    <br>
                                    <div class="campo">
                                        <input type="text" placeholder="Bairro" id="bairro" required name="bairro"/>
                                    </div>
                                    <br>

                                    <div class="campo">
                                        <input type="text" placeholder="Logradouro" id="rua" required name="logradouro"/>
                                    </div>
                                    <br>

                                    <div class="campo">
                                        <input type="text" placeholder="Número" required name="numero"/>
                                    </div>
                                    <br>

                                    <div class="campo">
                                        <input type="text" placeholder="Complemento" name="complemento"/>
                                    </div>
                                    <br>
                                    
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descrição" required name="descricao"></textarea>
                            </div>
                            
                            <div class="area-botao">
                                <input type="submit" value="Cadastrar" class="botao-cadastrar"/> 
                            </div>
                                
                        </div>



                        <!-- AREA DE CADASTRAR IMAGEM -->
                        <div id="area-foto" class="coluna">
                            <div class="imageContainer">
                                <img src="images/perfil-campanha.png" alt="selecionar foto" id="imgPhoto">
                                <input type="file" id="flImage" name="image" accept="image/*">
                            </div>
                            <p class="titulo-foto">Foto da Campanha</p>

                            <br>

                            <div class="area-add-fotos">
                                <div class="titulo-add">
                                    <p>Adicione outras fotos da campanha (opcional)</p>
                                    <i id="photos" class="fi fi-sr-images"></i>
                                    <input type="file" id="files" multiple accept="image/*" onchange="handleFileSelect(event)"><br>
                                </div>
                                <div class="galeria"></div>
                            </div>
                        </div>
                        
                    </div>

                </form>

                <br>

                <section class="table__header">
                    <div class="sub-titulo">
                        <span>Campanhas Cadastradas</span>
                    </div>

                    <div class="input-group">
                        <input type="search" placeholder="Pesquisar...">
                        <i class="bi bi-search"></i>
                    </div>

                    <div class="area-icons">
                        <div id="icon-cards">
                            <i class="fi fi-sr-apps"></i>
                        </div>
                        <div id="icon-tabela">
                            <i class="fi fi-br-list"></i>
                        </div>
                    </div>
                </section>

            <!-- CAMPANHAS CADASTRADAS -->
            <div class="consulta">
                <div id="area-cards">
                    <?php while($user_data = mysqli_fetch_assoc($resultCamp)){ ?>
                    <div class="card">
                        <div class="foto">
                        <img src="<?php echo "cadastro/" . $user_data['fotoPerfilCampanha'];?>">
                        </div>

                        <div class="area-conteudo">
                            <div class="dados">
                                <div class="info">
                                    <div class="nome">
                                        <h3><?php echo $user_data['nomeCampanha'];?></h3>
                                    </div>
                                    <div>
                                        <span>Descrição: <span><p><?php echo $user_data['informacaoCampanha'];?></p>
                                    </div>
                                </div>
                                <div class="area-botoes">
                                    <button class="open-modalEdit btn-editar" name="editar"><i class="fi fi-br-edit"></i></button>
                                    <a style="text-decoration: none ;" href="Cadastro/deleteCampanha.php?id=<?php echo $user_data['idCampanha']; ?>">
                                        <button class="open-modalExcCam btn-excluir" name="excluir"><i class="fi fi-sr-trash"></i></button>
                                    </a>
                                </div>
                            </div>

                            <div class="area-btn-modal">
                                <div class="open-modalCam botao-modal">
                                    <p>Ver Mais</p>
                                    <i class="fi fi-br-angle-small-right"></i>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                        <!-- Modal Alterar -->
                        <div class="fadeEdit hide"></div>
                        <div class="modalEdit hide">
                            <div class="modal-header">
                                <div class="detalhe-modal">
                                    <img src="images/pag-campanhas.png" alt="">
                                </div>

                                <div class="titulo-modal">
                                    <span>Alterar Dados da Campanha</span>
                                </div>
                                
                                <i class="fi fi-br-cross close-modal"></i>
                            </div>

                            <div class="conteudo-modal">
                                
                            <div class="modal-body1">
                                
                                <div class="area-foto">
                                    <img src="images/foto-campanha.png">

                                    <div class="area-iconEditar">
                                        <i class="fi fi-sr-pencil"></i>
                                    </div>
                                </div>

                                <div class="titulo-info">
                                    <span>Informações</span>
                                    <i class="fi fi-rr-file-circle-info"></i>
                                </div>

                                <div class="input-field">
                                    <label>Nome da Campanha</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Ampara Animal">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Data</label>
                                    <input type="text" name="nomepet" id="nomepet" value="dd/mm/aaaa">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Horário</label>
                                    <input type="text" name="nomepet" id="nomepet" value="14:00">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Descrição</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Inserir um pouquinho de texto, inserir um pouquinho de texto,
                                    inserir um pouquinho de texto, inserir um pouquinho de texto, inserir um pouquinho de texto, inserir um pouquinho de texto.">
                                    <div class="underline"></div>
                                </div>

                            </div>
                                
                            <div class="modal-body2">

                                <div class="area-add-fotos">
                                    <div class="titulo-add">
                                        <p>Altere e/ou adicione fotos da campanha</p>
                                        <i class="fi fi-sr-apps-add"></i>
                                    </div>
                                    <div class="galeria">
                                        <img src="images/foto-cao.png">
                                        <img src="images/foto-cao.png">
                                        <img src="images/foto-cao.png">
                                    </div>
                                </div>

                                <div class="titulo-info">
                                    <span>Localização</span>
                                    <i class="fi fi-ss-marker"></i>
                                </div>

                                <form action="">
                                    <div class="area-form">
                                        <div class="input-field">
                                            <label>CEP</label>
                                            <input type="text" name="nomepet" id="nomepet" value="08380-290">
                                            <div class="underline"></div>
                                        </div>

                                        <div class="input-field">
                                            <label>Logradouro</label>
                                            <input type="text" name="nomepet" id="nomepet" value="Rua das Rosas">
                                            <div class="underline"></div>
                                        </div>

                                        <div class="input-field">
                                            <label>Estado</label>
                                            <input type="text" name="nomepet" id="nomepet" value="SP">
                                            <div class="underline"></div>
                                        </div>
                                        <div class="input-field">
                                            <label>Número</label>
                                            <input type="text" name="nomepet" id="nomepet" value="75">
                                            <div class="underline"></div>
                                        </div>
                                        <div class="input-field">
                                            <label>Cidade</label>
                                            <input type="text" name="nomepet" id="nomepet" value="São Paulo">
                                            <div class="underline"></div>
                                        </div>
                                        <div class="input-field">
                                            <label>Complemento</label>
                                            <input type="text" name="nomepet" id="nomepet" value="Bloco C">
                                            <div class="underline"></div>
                                        </div>
                                        <div class="input-field">
                                            <label>Bairro</label>
                                            <input type="text" name="nomepet" id="nomepet" value="Jardim Iguatemi">
                                            <div class="underline"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>

                            <div class="area-botoes-modal">
                                <button class="closeBtnModal botao-modal">Cancelar</button>
                                <button class="botao-modal2">Salvar</button>
                            </div>
                        </div> 
                        

                        <!-- Modal Excluir -->
                        <div class="fadeExcCam hide"></div>
                        <div class="modalExcCam hide">
                                <div class="modal-header">
                                    <i class="fi fi-br-cross close-modal"></i>
                                </div>
                                    
                            <div class="area-modal">
                                    
                                <div class="modal-body">
                                    <div class="area-foto">
                                        <img src="images/img-excluir.png" alt="">     
                                    </div>
                                </div>

                                <div class="excluir-info">
                                    <span>Deseja excluir a campanha permanentemente?</span>
                                </div>

                                <div class="area-botoes">
                                    <button class="closeBtnModal botao-modalExc">Cancelar</button>
                                    <button class="botao-modalExc2">Excluir</button>
                                </div>
                            </div> 

                        </div>


                        <!-- Modal Ver Mais -->
                        <?php while($user_data = mysqli_fetch_assoc($resultCamp)){ ?>
                        <div class="fadeCam hide"></div>
                        <div class="modalCam hide">

                        <div class="modal-header">
                <div class="detalhe-modal">
                    <img src="<?php echo "cadastro/" . $user_data['fotoPerfilCampanha'];?>">
                </div>

                <i class="fi fi-br-cross close-modal"></i>
            </div>
                    
            <div class="area-modal">
                <div class="modal-body1">
                    <div class="area-foto">
                        <img src="images/foto-campanha.png">
                    </div>

                    <div class="nome-cam">
                        <span>Campanha</span>
                        <p><?php $user_data['nomeCampanha'] ?></p>
                    </div>
                
                </div>

                <div class="modal-cam">
                    <div class="titulo-cam">
                        <span>Localização</span>
                        <i class="fi fi-ss-marker"></i>
                    </div>
                
                    <div class="conteudo-cam">
                        <div class="campo-cam">
                            <span>CEP</span>
                            <p>08380-290</p>
                        </div>

                        <div class="campo-cam">
                            <span>Bairro</span>
                            <p>Iguatemi</p>
                        </div>

                        <div class="campo-cam">
                            <span>Complemento</span>
                            <p>Bloco C</p>
                        </div>
                                    
                        <div class="campo-cam">
                            <span>Estado</span>
                            <p>SP</p>
                        </div>

                        <div class="campo-cam">
                            <span>Logradouro</span>
                            <p>Rua João de Carvalho</p>
                        </div>

                        <div class="campo-cam">
                            <span>Cidade</span>
                            <p>São Paulo</p>
                        </div>

                        <div class="campo-cam">
                            <span>Número</span>
                            <p>76</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="area-modal">
                <div class="modal-body2">
                    <div class="conteudo-info">

                        <div class="campo-info-cam">
                            <div class="subtitulo">
                                <span>Descrição</span>
                                <i class="fi fi-rr-memo"></i>
                            </div>
                            <p>Inserir um pouquinho de texto, inserir um pouquinho de texto,
                            inserir um pouquinho de texto, inserir um pouquinho de texto,
                            inserir um pouquinho de texto, inserir um pouquinho de texto.
                            </p>
                        </div>

                        <div class="campo-info">
                            <div class="subtitulo">
                                <span>Data</span>
                                <i class="fi fi-rr-calendar"></i>
                            </div>
                            <p>dd/mm/aaaa</p>
                        </div>

                        <div class="campo-info">
                            <div class="subtitulo">
                                <span>Horário</span>
                                <i class="fi fi-rr-clock-three"></i>
                            </div>
                            <p>00:00 horas</p>
                        </div>
                    </div>
                </div>
                    <div class="area-add-fotos">
                        <div class="titulo-add">
                            <p>Galeria de Fotos da Campanha</p>
                            <i class="fi fi-rr-gallery"></i>
                        </div>
                        <div class="galeria">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                            <img src="images/foto-cao.png">
                        </div>
                    </div>
            </div>
        </div> 

                    </div> 
                    <?php } ?> 
                </div>

                <br><br>

                <!-- TABELA -->
                <div id="area-tabela"></div>

            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="js/script.js"></script>
        <script src="js/modal-campanha.js"></script>

    </body>
</html>
