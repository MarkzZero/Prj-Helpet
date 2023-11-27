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

        <title>Dashboard do ADM</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet" href="css/modal.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">        
    </head>
    <body>
        <div class="container">

            <!-- Menu Fixo Lateral -->
            <?php require "menu-lateral.php"; ?>


            <div class="main">

                <br>
                <section class="table__header">
                    <div class="sub-titulo">
                        <span>ONGs Cadastradas</span>
                    </div>

                    <div class="input-group">
                        <input id="searchbar" onkeyup="search_animal()" type="search"   placeholder="Pesquisar nome da ONG...">
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

                <!-- ONGs CADASTRADAS -->
                <div class="consulta">
                <!-- CARDS -->
                <div id="area-cards"> 
                <?php while($user_data = mysqli_fetch_assoc($result)){ ?>

                    <div class="card">
                        <div class="foto-card">
                            <img src="images/foto-ong.png">
                            <h4><?php echo $user_data['nomeOng'];?></h4>
                        </div>
                        <div class="desc">
                            <i class="fi fi-rr-marker"></i>                            
                            <p><?php echo $user_data['estadoOng'];?></p>
                        </div>
                        <div class="btns">
                            <button class="btn-info open-modal">
                                <p>Ver Mais</p>
                                <i class="fi fi-br-angle-small-right"></i>
                            </button>
                            <button class="btn-delete open-modalExcluir"><i class="fi fi-sr-trash"></i></button>
                        </div>

                        <div class="fade hide"></div>
                        <div class="modal hide">
                            <div class="modal-header">
                                <div class="detalhe-modal">
                                    <img src="images/pag-ongs.png" alt="">
                                </div>
                                <i class="fi fi-br-cross close-modal"></i>
                            </div>

                            <div class="area-modal">

                                <div class="modal-body1">
                                    <div class="area-foto">
                                        <img src="images/foto-ong.png" alt="">
                                    </div>

                                    <div class="nome-ong">
                                        <span>ONG</span>
                                        <p><?php echo $user_data['nomeOng'];?></p>
                                    </div>
                                </div>

                                <div class="modal-localizacao">
                                    <div class="titulo-localizacao">
                                        <span>Localização</span>
                                        <i class="fi fi-bs-marker"></i>
                                    </div>
                    
                                    <div class="conteudo-local">
                                        <div class="campo-local">
                                            <span>CEP</span>
                                            <p><?php echo $user_data['cepOng'];?></p>
                                        </div>

                                        <div class="campo-local">
                                            <span>Bairro</span>
                                            <p><?php echo $user_data['bairroOng'];?></p>
                                        </div>

                                        <div class="campo-local">
                                            <span>Complemento</span>
                                            <p><?php echo $user_data['complementoOng'];?></p>
                                        </div>
                                        
                                        <div class="campo-local">
                                            <span>Estado</span>
                                            <p><?php echo $user_data['estadoOng'];?></p>
                                        </div>

                                        <div class="campo-local">
                                            <span>Logradouro</span>
                                            <p><?php echo $user_data['logradouroOng'];?></p>
                                        </div>

                                        <div class="campo-local">
                                            <span>Número</span>
                                            <p><?php echo $user_data['numLogOng'];?></p>
                                        </div>

                                        <div class="campo-local">
                                            <span>Cidade</span>
                                            <p>São Paulo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="area-modal2">
                                <div class="modal-body2">
                                    <div class="conteudo-info">
                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>Telefone</span>
                                                <i class="fi fi-br-phone-call"></i>
                                            </div>
                                            <p>(11)98765-4321</p>
                                        </div>

                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>CNPJ</span>
                                                <i class="fi fi-br-id-badge"></i>
                                            </div>
                                            <p><?php echo $user_data['cnpjOng'];?></p>
                                        </div>

                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>Capacidade</span>
                                                <i class="fi fi-br-paw"></i>
                                            </div>
                                            <p><?php echo $user_data['capacidadeOng'];?></p>
                                        </div>

                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>CNAS</span>
                                                <i class="fi fi-br-file-invoice"></i>
                                            </div>
                                            <p><?php echo $user_data['cnasOng'];?></p>
                                        </div>

                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>Email</span>
                                                <i class="fi fi-br-envelope"></i>
                                            </div>
                                            <p><?php echo $user_data['emailOng'];?></p>
                                        </div>

                                        <div class="campo-info">
                                            <div class="subtitulo">
                                                <span>CEBAS</span>
                                                <i class="fi fi-br-diploma"></i>
                                            </div>
                                            <p><?php echo $user_data['cebasOng'];?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7314.867832910044!2d-46.63305022111003!3d-23.552854412933524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1695764301953!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="fadeExcluir hide"></div>
                        <div class="modalExcluir hide">
                            <div class="modal-headerExcluir">
                                <i class="fi fi-br-cross close-modalExcluir"></i>
                            </div>
                                    
                            <div class="area-modalExcluir">
                                <div class="modal-bodyExcluir">
                                    <div class="area-fotoExcluir">
                                        <img src="images/img-excluir.png" alt="">     
                                    </div>
                                </div>

                                <div class="excluir-info">
                                    <span>Deseja excluir o perfil da ONG <?php echo $user_data['nomeOng'];?> permanentemente?</span>
                                </div>

                                <div class="area-botoesExcluir">
                                    <button class="botao-modalExcluir">Cancelar</button>
                                    <button class="botao-modalExcluir2">Excluir</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <?php } ?>
                    </div>


                        <!-- Tabela -->
                        <div id="area-tabela">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Foto de Perfil</th>
                                        <th>Nome da ONG</th>
                                        <th>Estado</th>
                                        <th>Informações</th>
                                        <th>Alterações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><img src="images/foto-ong.png"></td>
                                        <td>
                                            <div class="nome">
                                                MAPAN
                                            </div>
                        </div>
                        </td>
                        <td>
                            <div class="raca">
                                <p>SP</p>
                            </div>
                        </td>
                        <td>
                            <div class="area-btn-modal">
                                <button style="border: none;" class="open-modalVer botao-modal" data-animalid="<?php echo $user_data['idAnimal']; ?>">
                                    <p>Ver Mais</p>
                                    <div class="icon-btn">
                                        <i class="fi fi-br-angle-small-right"></i>
                                    </div>
                                </button>
                            </div>
                        </td>
                        <td>
                            <button class="open-modal btn-editar" name="editar"><i class="fi fi-br-edit"></i></button>
                            <button class="open-modalExcluir btn-excluir" name="excluir"><i class="fi fi-sr-trash"></i></button>
                        </td>
                        </tr>
                
                    </tbody>
                    </table>

                    </div>
                </div>

            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <script src="js/script.js"></script>
        <script src="js/graficos.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/barra-pesquisa.js"></script>

    </body>
</html>
