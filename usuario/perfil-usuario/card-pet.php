<?php while ($pet_data = mysqli_fetch_assoc($sqlPet)) { ?>
    <div class="card">
        <div class="area-foto">
            <div class="icon-fav">
                <i id="heartIcon1" class="fi-rr-heart icon"></i>
            </div>

            <div class="foto">
                <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal'] ?>">
            </div>
        </div>

        <div class="area-conteudo">
            <div class="info">
                <div class="nome">
                    <h3>
                        <?php echo $pet_data['nomeAnimal'] ?>
                    </h3>
                </div>
                <?php if ($pet_data['generoAnimal'] == 'Fêmea') { ?>
                    <div class="icon-femea">
                        <i class="fi fi-rr-venus"></i>
                    </div>
                <?php } elseif ($pet_data['generoAnimal'] == 'Macho') { ?>
                    <div class="icon-macho">
                        <i class="fi fi-rr-mars"></i>
                    </div>
                <?php } ?>
            </div>

            <div class="local">
                <i class="fi fi-sr-marker"></i>
                <p>123 Anywhere St., Any City</p>
            </div>

            <div class="area-btn-modal">
                <button class="open-modal botao-modal">
                    <p>Saiba Mais</p>
                    <i class="fi fi-br-angle-small-right"></i>
                </button>
            </div>
        </div>

        <!-- Modal Saiba Mais -->
        <div class="fade hide"></div>
        <div class="modal hide">
            <div class="modal-header">
                <div class="icon-fav">
                    <i id="heartIcon1" class="fi-rr-heart icon"></i>
                </div>

                <div class="fechar-modal">
                    <i class="fechar fi fi-br-cross close-modal"></i>
                    <i class="seta fi fi-br-angle-small-left close-modal"></i>
                </div>
            </div>

            <div class="modal-info">
                <div class="info-pet">
                    <div class="modal-nome">
                        <div class="foto-modal">
                            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal'] ?>">
                        </div>
                        <div class="nome-pet">
                            <h3>
                                <?php echo $pet_data['nomeAnimal'] ?>
                            </h3>
                            <?php if ($pet_data['generoAnimal'] == 'Fêmea') { ?>
                                <div class="icon-femea">
                                    <i class="fi fi-rr-venus"></i>
                                </div>
                            <?php } elseif ($pet_data['generoAnimal'] == 'Macho') { ?>
                                <div class="icon-macho">
                                    <i class="fi fi-rr-mars"></i>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="area-itens">
                        <div class="item">
                            <h4>Raça</h4>
                            <p> <?php echo $pet_data['nomeAnimal'] ?></p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-paw"></i>
                            </div>
                        </div>

                        <div class="item">
                            <h4>Idade</h4>
                            <p>Adulto (Entre 1 e 3 anos)</p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-paw"></i>
                            </div>
                        </div>

                        <div class="item">
                            <h4>Porte</h4>
                            <p>Pequeno</p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-paw"></i>
                            </div>
                        </div>

                        <div class="item">
                            <h4>Espécie</h4>
                            <p><?php echo $pet_data['especieAnimal'] ?></p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-paw"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listas">
                        <div class="vacinas">
                            <span>Vacinas</span>
                            <ul>
                                <li>Raiva e Alergias</li>
                                <li>Polivalente</li>
                            </ul>
                        </div>
                        <div class="doencas">
                            <span>Doenças</span>
                            <ul>
                                <li>Não tem nenhuma doença</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="area-ong">
                    <div class="galeria">
                        <div class="titulo-galeria">
                            <p>Galeria</p>
                            <i class="fi fi-br-gallery"></i>
                        </div>
                        <div class="fotos">
                            <img src="images/pet-gato.png">
                            <img src="images/pet-gato.png">
                            <img src="images/pet-gato.png">
                            <img src="images/pet-gato.png">
                            <img src="images/pet-gato.png">
                            <img src="images/pet-gato.png">
                        </div>
                    </div>

                    <div class="info-ong">
                        <img src="images/foto-ong.png">

                        <div class="item-ong">
                            <div class="nome-ong">
                                <h3>Nome da ONG</h3>
                                <div class="icons icon-chat">
                                    <i class="fi fi-rr-messages icon-chat"></i>
                                </div>
                            </div>

                            <div class="local">
                                <i class="fi fi-sr-marker"></i>
                                <p>123 Anywhere St., Any City</p>
                            </div>
                        </div>
                    </div>

                    <div class="area-descricao">
                        <div class="post-body">
                            <span class="short-text">
                                <p>
                                    É um gato adulto com cerca de 2 anos, porte pequeno, da raça siamês,
                                    tendo tomado todas as vacinas e não tem nenhuma doença.
                                </p>
                                <a class="read-more">Ler mais</a>
                            </span>
                            <span class="full-text">
                                <p>
                                    É um gato adulto com cerca de 2 anos, porte pequeno, da raça siamês,
                                    tendo tomado todas as vacinas e não tem nenhuma doença.
                                    <a class="read-less">Ler menos</a>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="area-botoes">
                <button name="adotar">
                    Adotar
                    <i class="fi fi-sr-paw"></i>
                </button>

                <button name="apadrinhar">
                    Apadrinhar
                    <i class="fi fi-sr-paw"></i>
                </button>
            </div>
        </div>

    </div>
<?php } ?>